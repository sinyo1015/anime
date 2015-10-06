<?php

namespace AC\Http\Controllers;

use AC\Models\Classification;
use AC\Models\Genre;
use AC\Models\Producer;
use AC\Models\Season;
use AC\Models\Type;
use AC\Repositories\EloquentAnimeRepository as Anime;
use AC\Models\Episode;

class AnimeController extends Controller
{
    protected $data;

    /**
     * @var Anime
     */
    private $anime;

    /**
     * @var Classification
     */
    private $classification;

    /**
     * @var Episode
     */
    private $episode;

    /**
     * @var Genre
     */
    private $genre;

    /**
     * @var Producer
     */
    private $producer;

    /**
     * @var Season
     */
    private $season;

    /**
     * @var Type
     */
    private $type;

    /**
     * @param Anime $anime
     * @param Classification $classification
     * @param Episode $episode
     * @param Genre $genre
     * @param Producer $producer
     * @param Season $season
     * @param Type $type
     */
    public function __construct(Anime $anime, Classification $classification, Episode $episode, Genre $genre, Producer $producer, Season $season, Type $type)
    {
        $this->anime = $anime;
        $this->classification = $classification;
        $this->episode = $episode;
        $this->genre = $genre;
        $this->producer = $producer;
        $this->season = $season;
        $this->type = $type;

        $this->data['classifications'] = $this->classification->where('name', '<>', 'Rx - Hentai')->get(['id', 'name']);
        $this->data['genres'] = $this->genre->where('model', '=', 'Anime')->get(['id', 'name']);
        $this->data['producers'] = $this->producer->get(['id', 'name']);
        $this->data['seasons'] = $this->season->orderBy('name', 'DESC')->get(['id', 'name']);
        $this->data['types'] = $this->type->where('model', '=', 'Anime')->get(['id', 'name']);
    }

    public function getIndex($letter = '')
    {
        $this->data['animes'] = $this->anime->getAllByLetter($letter);
        $this->data['currentURL'] = $this->getCurrentURL($letter);

        return view('anime.index', $this->data);
    }

    public function getLatest()
    {
        $this->data['animes'] = $this->anime->getLatestByLetter();
        $this->data['currentURL'] = $this->getCurrentURL();

        return view('anime.index', $this->data);
    }

    public function getLatestByLetter($letter)
    {
        $this->data['animes'] = $this->anime->getLatestByLetter($letter);
        $this->data['currentURL'] = $this->getCurrentURL($letter);

        return view('anime.index', $this->data);
    }

    public function getByClassificationID($id = 0)
    {
        $this->data['animes'] = $this->anime->getByClassificationAndLetter($id);
        $this->data['currentURL'] = $this->getCurrentURL();

        return view('anime.index', $this->data);
    }

    public function getByClassificationIDAndLetter($id = 0, $letter = '')
    {
        $this->data['animes'] = $this->anime->getByClassificationAndLetter($id, $letter);
        $this->data['currentURL'] = $this->getCurrentURL($letter);

        return view('anime.index', $this->data);
    }

    public function getByGenreID($id = 0)
    {
        $this->data['animes'] = $this->anime->getByGenreAndLetter($id);
        $this->data['currentURL'] = $this->getCurrentURL();

        return view('anime.index', $this->data);
    }

    public function getByGenreIDAndLetter($id = 0, $letter = '')
    {
        $this->data['animes'] = $this->anime->getByGenreAndLetter($id, $letter);
        $this->data['currentURL'] = $this->getCurrentURL($letter);

        return view('anime.index', $this->data);
    }

    public function getByProducerID($id = 0)
    {
        $this->data['animes'] = $this->anime->getByProducerAndLetter($id);
        $this->data['currentURL'] = $this->getCurrentURL();

        return view('anime.index', $this->data);
    }

    public function getByProducerIDAndLetter($id = 0, $letter = '')
    {
        $this->data['animes'] = $this->anime->getByProducerAndLetter($id, $letter);
        $this->data['currentURL'] = $this->getCurrentURL($letter);

        return view('anime.index', $this->data);
    }

    public function getBySeasonID($id = 0)
    {
        $this->data['animes'] = $this->anime->getBySeasonAndLetter($id);
        $this->data['currentURL'] = $this->getCurrentURL();

        return view('anime.index', $this->data);
    }

    public function getBySeasonIDAndLetter($id = 0, $letter = '')
    {
        $this->data['animes'] = $this->anime->getBySeasonAndLetter($id, $letter);
        $this->data['currentURL'] = $this->getCurrentURL($letter);

        return view('anime.index', $this->data);
    }

    public function getByTypeID($id = 0)
    {
        $this->data['animes'] = $this->anime->getByTypeAndLetter($id);
        $this->data['currentURL'] = $this->getCurrentURL();

        return view('anime.index', $this->data);
    }

    public function getByTypeIDAndLetter($id = 0, $letter = '')
    {
        $this->data['animes'] = $this->anime->getByTypeAndLetter($id, $letter);
        $this->data['currentURL'] = $this->getCurrentURL($letter);

        return view('anime.index', $this->data);
    }

    public function getSubbed()
    {
        $this->data['animes'] = $this->anime->getSubbedByLetter();
        $this->data['currentURL'] = $this->getCurrentURL();

        return view('anime.index', $this->data);
    }

    public function getSubbedByLetter($letter = '')
    {
        $this->data['animes'] = $this->anime->getSubbedByLetter($letter);
        $this->data['currentURL'] = $this->getCurrentURL();

        return view('anime.index', $this->data);
    }

    public function getDubbed()
    {
        $this->data['animes'] = $this->anime->getDubbedByLetter();
        $this->data['currentURL'] = $this->getCurrentURL();

        return view('anime.index', $this->data);
    }

    public function getDubbedByLetter($letter = '')
    {
        $this->data['animes'] = $this->anime->getDubbedByLetter($letter);
        $this->data['currentURL'] = $this->getCurrentURL();

        return view('anime.index', $this->data);
    }

    public function getCurrentURL($letter = '')
    {
        return $letter ? str_replace('/' . $letter, '', request()->path()) : request()->path();
    }
}
