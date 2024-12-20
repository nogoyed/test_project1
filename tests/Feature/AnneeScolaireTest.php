<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\AnneeScolaire;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AnneeScolaireTest extends TestCase
{
    use RefreshDatabase;
    public function test_an_school_year_can_be_stored_in_a_database(): void
    {
        $this->withoutExceptionHandling();

        $response = $this->post('annee',[
            'libelle'=> 'Annee',
        ]);

        $this->assertCount(1, AnneeScolaire::all());
    }
}
