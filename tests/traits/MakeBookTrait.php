<?php

use Faker\Factory as Faker;
use App\Models\Book;
use App\Repositories\BookRepository;

trait MakeBookTrait
{
    /**
     * Create fake instance of Book and save it in database
     *
     * @param array $bookFields
     * @return Book
     */
    public function makeBook($bookFields = [])
    {
        /** @var BookRepository $bookRepo */
        $bookRepo = App::make(BookRepository::class);
        $theme = $this->fakeBookData($bookFields);
        return $bookRepo->create($theme);
    }

    /**
     * Get fake instance of Book
     *
     * @param array $bookFields
     * @return Book
     */
    public function fakeBook($bookFields = [])
    {
        return new Book($this->fakeBookData($bookFields));
    }

    /**
     * Get fake data of Book
     *
     * @param array $postFields
     * @return array
     */
    public function fakeBookData($bookFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'title' => $fake->word,
            'review' => $fake->text,
            'cover' => $fake->word,
            'autho_id' => $fake->randomDigitNotNull,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $bookFields);
    }
}
