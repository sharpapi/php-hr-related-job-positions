<?php

declare(strict_types=1);

namespace SharpAPI\HRRelatedPositions;

use GuzzleHttp\Exception\GuzzleException;
use SharpAPI\Core\Client\SharpApiClient;

/**
 * Generate related job positions using AI - finds similar positions with scores
 *
 * @package SharpAPI\HRRelatedPositions
 * @api
 */
class RelatedJobPositionsClient extends SharpApiClient
{
    public function __construct(
        string $apiKey,
        ?string $apiBaseUrl = 'https://sharpapi.com/api/v1',
        ?string $userAgent = 'SharpAPIPHPHRRelatedPositions/1.0.0'
    ) {
        parent::__construct($apiKey, $apiBaseUrl, $userAgent);
    }

    /**
     * Generate related job positions using AI - finds similar positions with scores
     *
     * @param string $positionName The job position name to find related items for
     * @param string $language Output language (default: English)
     * @param int|null $maxQuantity Optional maximum quantity of results
     * @return string Status URL for polling the job result
     * @throws GuzzleException
     * @api
     */
    public function findRelatedJobPositions(
        string $positionName,
        string $language = 'English',
        ?int $maxQuantity = null
    ): string {
        $response = $this->makeRequest('POST', '/hr/related_job_positions', array_filter([
            'content' => $positionName,
            'language' => $language,
            'max_quantity' => $maxQuantity,
        ], fn($v) => $v !== null));

        return $this->parseStatusUrl($response);
    }
}
