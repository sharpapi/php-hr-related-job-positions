![SharpAPI GitHub cover](https://sharpapi.com/sharpapi-github-laravel-bg.jpg "SharpAPI PHP Client")

# Hr Related Job Positions API for PHP

## 💼 Generate related job positions using AI - finds similar positions with scores

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sharpapi/php-hr-related-job-positions.svg?style=flat-square)](https://packagist.org/packages/sharpapi/php-hr-related-job-positions)
[![Total Downloads](https://img.shields.io/packagist/dt/sharpapi/php-hr-related-job-positions.svg?style=flat-square)](https://packagist.org/packages/sharpapi/php-hr-related-job-positions)

Check the full documentation on the [Hr Related Job Positions API for PHP API](https://sharpapi.com/en/catalog/ai/hr-tech/related-job-positions-generator) page.

---

## Quick Links

| Resource | Link |
|----------|------|
| **Main API Documentation** | [Authorization, Webhooks, Polling & More](https://documenter.getpostman.com/view/31106842/2s9Ye8faUp) |
| **Postman Documentation** | [View Docs](https://documenter.getpostman.com/view/31106842/2sBXVeGsaA) |
| **Product Details** | [SharpAPI.com](https://sharpapi.com/en/catalog/ai/hr-tech/related-job-positions-generator) |
| **SDK Libraries** | [GitHub - SharpAPI SDKs](https://github.com/sharpapi) |

---

## Requirements

- PHP >= 8.0

---

## Installation

### Step 1. Install the package via Composer:

```bash
composer require sharpapi/php-hr-related-job-positions
```

### Step 2. Visit [SharpAPI](https://sharpapi.com/) to get your API key.

---
## Laravel Integration

Building a Laravel application? Check the Laravel package version for better integration.

---

## What it does

Generate related job positions using AI - finds similar positions with scores

---

## Usage
```php
<?php

require __DIR__ . '/vendor/autoload.php';

use SharpAPI\HRRelatedPositions\RelatedJobPositionsClient;
use GuzzleHttp\Exception\GuzzleException;

$apiKey = 'your_api_key_here';
$client = new RelatedJobPositionsClient(apiKey: $apiKey);

try {
    $statusUrl = $client->findRelatedJobPositions(
        content: 'Your text content here',
        language: 'English'
    );

    // Optional: Configure polling
    $client->setApiJobStatusPollingInterval(10);
    $client->setApiJobStatusPollingWait(180);

    // Fetch results (polls automatically)
    $result = $client->fetchResults($statusUrl);
    $resultData = $result->getResultJson();

    echo $resultData;
} catch (GuzzleException $e) {
    echo "API error: " . $e->getMessage();
}
```

---

## Example Response
```json

{
    "data": {
        "type": "api_job_result",
        "id": "80d0a822-0e2a-40e1-97fd-e7fd62ec9eb0",
        "attributes": {
            "status": "success",
            "type": "hr_related_job_positions",
            "result": {
                "job_position": "Flutter Mobile Developer",
                "related_job_positions": [
                    {
                        "name": "Android Developer",
                        "weight": 8
                    },
                    {
                        "name": "iOS Developer",
                        "weight": 8.5
                    },
                    {
                        "name": "MOBILE APP DEVELOPER",
                        "weight": 9.5
                    },
                    {
                        "name": "React Native Developer",
                        "weight": 7.5
                    },
                    {
                        "name": "Mobile-Entwickler f\u00fcr Flutter",
                        "weight": 10
                    },
                    {
                        "name": "Flutter-App-Entwickler",
                        "weight": 9
                    },
                    {
                        "name": "Mobile-App-Entwickler (Flutter)",
                        "weight": 8
                    },
                    {
                        "name": "Flutter-Entwickler",
                        "weight": 10
                    },
                    {
                        "name": "Cross-Platform Mobile Developer",
                        "weight": 7
                    },
                    {
                        "name": "Mobile-App-Entwickler",
                        "weight": 9
                    },
                    {
                        "name": "Mobile-Entwickler",
                        "weight": 8
                    },
                    {
                        "name": "App-Entwickler",
                        "weight": 7
                    },
                    {
                        "name": "iOS-Entwickler",
                        "weight": 6
                    },
                    {
                        "name": "Flutter Entwickler",
                        "weight": 10
                    },
                    {
                        "name": "Mobile App Entwickler",
                        "weight": 9
                    },
                    {
                        "name": "Android Entwickler",
                        "weight": 8
                    },
                    {
                        "name": "iOS Entwickler",
                        "weight": 7.5
                    }
                ]
            }
        }
    }
}

```
---

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

---

## Credits

- [A2Z WEB LTD](https://github.com/a2zwebltd)
- [Dawid Makowski](https://github.com/makowskid)
- Boost your [PHP AI](https://sharpapi.com/) capabilities!

---

## License

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](LICENSE.md)

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

---

## Social Media

🚀 For the latest news, tutorials, and case studies, don't forget to follow us on:
- [SharpAPI X (formerly Twitter)](https://x.com/SharpAPI)
- [SharpAPI YouTube](https://www.youtube.com/@SharpAPI)
- [SharpAPI Vimeo](https://vimeo.com/SharpAPI)
- [SharpAPI LinkedIn](https://www.linkedin.com/products/a2z-web-ltd-sharpapicom-automate-with-aipowered-api/)
- [SharpAPI Facebook](https://www.facebook.com/profile.php?id=61554115896974)
