<?php

/**
 *
 * @property $author
 */
namespace App\Models;

use App\Model;

class Article extends Model
{

    //статическое св-во
    protected static $table = 'news';

    public $title;
    public $contents;
    public $author_id;

    /**
     * @param $name
     * @return object|null
     */
    public function __get($name)
    {
        if ( 'author' === $name && !empty($this->author_id) ) {
            $author = Author::findById($this->author_id);
            if ( !empty($author) ) {
                return $author;
            }
        }
        return null;
    }

}
