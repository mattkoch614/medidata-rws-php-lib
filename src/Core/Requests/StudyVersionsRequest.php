<?php
/**
 * Created by PhpStorm.
 * User: kochm
 * Date: 4/13/18
 * Time: 9:44 PM
 */

namespace Medidata\RwsPhp\Core\Requests;

class StudyVersionsRequest extends RwsAuthorizedGetRequest
{
    /**
     * @var
     */
    private $projectName;

    public function __construct($projectName)
    {
        parent::__construct();

        $this->projectName = $projectName;
    }

    /**
     * The URL path of the request being made.
     * @return mixed
     */
    public function UrlPath()
    {
        return RequestHelpers::makeUrl('/', [
            'metadata', 'studies', $this->projectName, 'versions'
        ]);
    }
}