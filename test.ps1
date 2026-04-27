# URL of your send endpoint
$Url = "https://novocib.com/send"

# POST data WITHOUT the honeypot field "website"
$Body = @{
    name    = "Normal User"
    mail    = "normal@example.com"
    need    = "Normal Request"
    message = "This should NOT trigger the honeypot"
}

# Send POST request WITHOUT following redirects
$response = Invoke-WebRequest `
    -Uri $Url `
    -Method POST `
    -Body $Body `
    -ContentType "application/x-www-form-urlencoded" `
    -MaximumRedirection 0 `
    -ErrorAction SilentlyContinue

# Output status code + response
Write-Host "Status Code:" $response.StatusCode
Write-Host "`nRaw Response:`n"
Write-Host $response.Content
