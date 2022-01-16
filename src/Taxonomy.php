<?php

namespace Vespera\PostType;

use PostTypes\Taxonomy as BaseTaxonomy;

class Taxonomy extends BaseTaxonomy
{
    public function createLabels()
    {
        // default labels
        $labels = [
            'name' => $this->plural,
            'singular_name' => $this->singular,
            'menu_name' => $this->plural,
            'all_items' => "Todos registros",
            'edit_item' => "Editar {$this->singular}",
            'view_item' => "Ver {$this->singular}",
            'update_item' => "Atualizar {$this->singular}",
            'add_new_item' => "Adicionar {$this->singular}",
            'new_item_name' => "Nome {$this->singular}",
            'parent_item' => "Pai",
            'parent_item_colon' => "Pai:",
            'search_items' => "Buscar {$this->plural}",
            'popular_items' => "{$this->plural} populares",
            'separate_items_with_commas' => "Separe os registros com virgulas",
            'add_or_remove_items' => "Adicionar ou remover {$this->plural}",
            'choose_from_most_used' => "Escolha entre os registros mais usados",
            'not_found' => "Nenhum registro encontrado",
        ];

        return array_replace($labels, $this->labels);
    }
}
