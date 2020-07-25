<?php


namespace App\Support;


use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Http;

class ContestKit
{
    private $api;
    private $key;

    public function __construct()
    {
        $this->api = config('contest-kit.api');
        $this->key = config('contest-kit.key'); // How are we handling api auth?
    }

    public function getCampaigns(): array
    {
        // Hit the API to get a list of current campaigns. This method is called from the Contest model (Sushi-powered)
        // For the moment I will make the trigger to delete the cache and re-fetch campaigns manual, but a webhook
        // might be added so that when a campaign is created at CK the site can be notified to clear the cache.
        return [];
    }

    public function postEntry(array $entry): array
    {
        // Hit the API to post an entry. Here's what I think the entry looks like.
        /*
         [
            'campaign_id' => 'xxxxxxx',
            'name' = 'John Doe',
            'email' => 'j.doe@email.com',
            'referrer' => 'hash-from-referring-entry-response-if-applicable'
        ]
         */

        return []; // data key of json_decoded return from the api response

    }

    // Some setters just in case this thing ever expands to include other people's contests.
    public function setApi(string $url)
    {
        $this->api = $url;
    }

    public function setKey(string $key)
    {
        $this->key = $key;
    }

}
