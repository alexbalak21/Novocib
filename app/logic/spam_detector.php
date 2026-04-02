<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/logic/dictionary.php";

function is_gibberish($text)
{
    global $dictionary;

    $text = trim($text);

    // Normalize: keep letters, accents, and spaces
    $clean = strtolower(iconv('UTF-8', 'ASCII//TRANSLIT', $text));
    $clean = preg_replace('/[^a-z ]/', '', $clean);

    // 1) Too short to be meaningful
    if (strlen($clean) < 10) {
        return true;
    }

    // 2) No spaces → extremely suspicious
    if (!str_contains($clean, ' ')) {
        return true;
    }

    // 3) Too many consonants in a row (6+)
    if (preg_match('/[bcdfghjklmnpqrstvwxyz]{6,}/i', $clean)) {
        return true;
    }

    // 4) No vowels at all
    if (!preg_match('/[aeiouy]/i', $clean)) {
        return true;
    }

    // 5) Vowel/consonant ratio check
    $vowels = preg_match_all('/[aeiouy]/i', $clean);
    $consonants = preg_match_all('/[bcdfghjklmnpqrstvwxyz]/i', $clean);

    if ($consonants > 0 && ($vowels / $consonants) < 0.15) {
        return true;
    }

    // 6) Entropy check (random strings have high entropy)
    $entropy = 0;
    $freq = count_chars($clean, 1);
    $len = strlen($clean);

    foreach ($freq as $count) {
        $p = $count / $len;
        $entropy -= $p * log($p, 2);
    }

    if ($entropy > 4.5) {
        return true;
    }

    // 7) Detect keyboard mashing patterns
    if (preg_match('/(asdf|qwer|zxcv|hjkl)/i', $clean)) {
        return true;
    }

    // 8) Detect excessive uppercase/lowercase switching
    if (preg_match('/[A-Z][a-z][A-Z][a-z]/', $text)) {
        return true;
    }

    // 9) Dictionary-based human language detection
    $wordMatches = 0;

    // Split into words to avoid substring false positives
    $words = explode(' ', $clean);

    foreach ($words as $w) {
        if (strlen($w) < 3) continue; // skip tiny words
        if (in_array($w, $dictionary)) {
            $wordMatches++;
        }
    }

    // If no real words found → likely spam
    if ($wordMatches === 0) {
        return true;
    }

    return false;
}
