# URL of your send endpoint
$Url = "https://novocib.com/send"

# POST data including the honeypot field "website"
$Body = @{
    name    = "Honeypot Test"
    mail    = "test@example.com"
    need    = "Testing Honeypot"
    message = "This should trigger the honeypot"
    website = "bot-filled-field"   # <-- Honeypot field (must NOT be empty)
}

# Send POST request WITHOUT following redirects
$response = Invoke-WebRequest `
    -Uri $Url `
    -Method POST `
    -Body $Body `
    -ContentType "application/x-www-form-urlencoded" `
    -MaximumRedirection 0 `
    -ErrorAction SilentlyContinue

Write-Host "Status Code:" $response.StatusCode
Write-Host "`nHeaders:`n"
$response.Headers
Write-Host "`nBody:`n"
$response.Content
