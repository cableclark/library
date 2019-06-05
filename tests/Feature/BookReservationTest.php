<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BookReservationTest extends TestCase
{

   /** @test */

    public function bookTest ()
    {
           $this->withoutExceptionHandling();
           
           $response = $this->post("/books", [
             "title"=> "title",
             "author"=> "Virginia Wolfe"
           ]);

           $response->assertOk();

           $this->assertCount(1, Book::all());
    }
}
