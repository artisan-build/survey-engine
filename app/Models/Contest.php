<?php


namespace App\Models;


use App\Support\ContestKit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Sushi\Sushi;

class Contest extends Model
{
    use Sushi;

    protected $rows = [];

    public function getRows()
    {
        return (new ContestKit())->getCampaigns();
    }

    public function clearCache()
    {
        File::delete(config('sushi.cache-path').'/contest.sqlite');
    }

}
