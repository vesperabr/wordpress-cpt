<?php

namespace Vespera\PostType;

use PostTypes\PostType as BasePostType;

class PostType extends BasePostType
{
    public function createLabels()
    {
        // default labels
        $labels = [
            'name' => $this->plural,
            'singular_name' => $this->singular,
            'menu_name' => $this->plural,
            'all_items' => $this->plural,
            'add_new' => "Adicionar",
            'add_new_item' => "Adicionar {$this->singular}",
            'edit_item' => "Editar {$this->singular}",
            'new_item' => "Novo {$this->singular}",
            'view_item' => "Ver {$this->singular}",
            'search_items' => "Buscar {$this->plural}",
            'not_found' => "Nenhum {$this->singular} encontrado",
            'not_found_in_trash' => "Nenhum {$this->singular} encontrado na lixeira",
            'parent_item_colon' => "{$this->singular} pai:",
        ];

        return array_replace_recursive($labels, $this->labels);
    }

    public function createOptions()
    {
        // default options
        $options = [
            'public' => true,
            'has_archive' => true,
            'supports' => ['title'],
            'rewrite' => [
                'slug' => $this->slug
            ]
        ];

        // replace defaults with the options passed
        $options = array_replace_recursive($options, $this->options);

        // create and set labels
        if (!isset($options['labels'])) {
            $options['labels'] = $this->createLabels();
        }

        // set the menu icon
        if (!isset($options['menu_icon']) && isset($this->icon)) {
            $options['menu_icon'] = $this->icon;
        }

        return $options;
    }
}
