<?php


namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    private $movieBody;

    private $CardImages;

    private $Cast;

    private $cert;

    private $duration;

    private $Genre;

    private $headline;

    private $externalId;

    private $KeyArtImages;

    private $lastUpdated;

    private $quote;

    private $rating;

    private $reviewAuthor;

    private $isSkyGo;

    private $sum;

    private $synopsis;

    private $url;

    private $Videos;

    private $viewingWindow;

    private $year;

    /**
     * @return mixed
     */
    public function getMovieBody()
    {
        return $this->movieBody;
    }

    /**
     * @param mixed $movieBody
     * @return Movie
     */
    public function setMovieBody($movieBody)
    {
        $this->movieBody = $movieBody;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCardImages()
    {
        return $this->CardImages;
    }

    /**
     * @param mixed $CardImages
     * @return Movie
     */
    public function setCardImages($CardImages)
    {
        $this->CardImages = $CardImages;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCast()
    {
        return $this->Cast;
    }

    /**
     * @param mixed $Cast
     * @return Movie
     */
    public function setCast($Cast)
    {
        $this->Cast = $Cast;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCert()
    {
        return $this->cert;
    }

    /**
     * @param mixed $cert
     * @return Movie
     */
    public function setCert($cert)
    {
        $this->cert = $cert;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param mixed $duration
     * @return Movie
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGenre()
    {
        return $this->Genre;
    }

    /**
     * @param mixed $Genre
     * @return Movie
     */
    public function setGenre($Genre)
    {
        $this->Genre = $Genre;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHeadline()
    {
        return $this->headline;
    }

    /**
     * @param mixed $headline
     * @return Movie
     */
    public function setHeadline($headline)
    {
        $this->headline = $headline;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * @param mixed $externalId
     * @return Movie
     */
    public function setExternalId($externalId)
    {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getKeyArtImages()
    {
        return $this->KeyArtImages;
    }

    /**
     * @param mixed $KeyArtImages
     * @return Movie
     */
    public function setKeyArtImages($KeyArtImages)
    {
        $this->KeyArtImages = $KeyArtImages;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastUpdated()
    {
        return $this->lastUpdated;
    }

    /**
     * @param mixed $lastUpdated
     * @return Movie
     */
    public function setLastUpdated($lastUpdated)
    {
        $this->lastUpdated = $lastUpdated;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getQuote()
    {
        return $this->quote;
    }

    /**
     * @param mixed $quote
     * @return Movie
     */
    public function setQuote($quote)
    {
        $this->quote = $quote;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param mixed $rating
     * @return Movie
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReviewAuthor()
    {
        return $this->reviewAuthor;
    }

    /**
     * @param mixed $reviewAuthor
     * @return Movie
     */
    public function setReviewAuthor($reviewAuthor)
    {
        $this->reviewAuthor = $reviewAuthor;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsSkyGo()
    {
        return $this->isSkyGo;
    }

    /**
     * @param mixed $isSkyGo
     * @return Movie
     */
    public function setIsSkyGo($isSkyGo)
    {
        $this->isSkyGo = $isSkyGo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSum()
    {
        return $this->sum;
    }

    /**
     * @param mixed $sum
     * @return Movie
     */
    public function setSum($sum)
    {
        $this->sum = $sum;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSynopsis()
    {
        return $this->synopsis;
    }

    /**
     * @param mixed $synopsis
     * @return Movie
     */
    public function setSynopsis($synopsis)
    {
        $this->synopsis = $synopsis;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     * @return Movie
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVideos()
    {
        return $this->Videos;
    }

    /**
     * @param mixed $Videos
     * @return Movie
     */
    public function setVideos($Videos)
    {
        $this->Videos = $Videos;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getViewingWindow()
    {
        return $this->viewingWindow;
    }

    /**
     * @param mixed $viewingWindow
     * @return Movie
     */
    public function setViewingWindow($viewingWindow)
    {
        $this->viewingWindow = $viewingWindow;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param mixed $year
     * @return Movie
     */
    public function setYear($year)
    {
        $this->year = $year;
        return $this;
    }
}
