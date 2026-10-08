<?php

namespace Tests\Feature;

use Tests\TestCase;

/**
 * Aqui ele pega todas as páginas para criar uma "Renderização" de cada uma, só para adicionar mais páginas é só colocar aqui o caminho da pasta dela
 */
class LibraryViewsTest extends TestCase
{
    public function test_library_pages_render_from_resources_views(): void
    {
        $this->withoutVite();

        $pages = [
            '/inicio' => 'inicio',
            '/autores' => 'autores',
        ];

        foreach ($pages as $path => $heading) {
            $this->get($path)
                ->assertOk()
                ->assertSee($heading)
                ->assertSee('Autores')
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
