<?php

namespace Tests\Feature;

use Tests\TestCase;

class LibraryViewsTest extends TestCase
{
    public function test_library_pages_render_from_resources_views(): void
    {
        $this->withoutVite();

        $pages = [
            '/Inicio' => 'Aqui é o ínicio',
            '/generos' => 'Gêneros',
            '/exemplares' => 'Exemplares',
            '/emprestimos' => 'Empréstimos',
            '/autores' => 'Autores',
            '/classificacao' => 'Classificação',
        ];

        foreach ($pages as $path => $heading) {
            $this->get($path)
                ->assertOk()
                ->assertSee($heading)
                ->assertSee('Autores')
                ->assertSee('Empréstimos')
                ->assertSee('Classificação')
                ->assertSee('aria-label="Alternar navegação"', false)
                ->assertSee('aria-controls="library-navigation"', false)
                ->assertSee('<footer', false)
                ->assertSee('bg-library-background', false)
                ->assertSee('bg-library-surface', false)
                ->assertSee('text-library-text', false)
                ->assertSee('border-library-secondary', false);
        }
    }
}
