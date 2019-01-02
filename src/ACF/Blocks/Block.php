<?php

namespace NanoSoup\Nemesis\ACF\Blocks;

/**
 * Class Block
 * @package NanoSoup\Nemesis\ACF
 */
class Block
{
    /**
     * @var
     */
    public $blockName;

    /**
     * @var
     */
    public $blockTitle;

    /**
     * @var
     */
    public $blockCallback;

    /**
     * @var
     */
    public $blockDescription = '';

    /**
     * @var
     */
    public $blockKeywords = [];

    /**
     * @var
     */
    public $blockIcon = '';

    /**
     * @var
     */
    public $catName = '';

    /**
     * @var
     */
    public $catSlug = 'common';

    /**
     * Block constructor.
     */
    public function __construct()
    {
        $this->blockCallback = [get_called_class(), 'renderBlock'];
    }

    /**
     * @param mixed $blockName
     * @return Block
     */
    public function setBlockName($blockName): self
    {
        $this->blockName = $blockName;
        return $this;
    }

    /**
     * @param mixed $blockTitle
     * @return Block
     */
    public function setBlockTitle($blockTitle): self
    {
        $this->blockTitle = $blockTitle;
        return $this;
    }

    /**
     * @param mixed $blockCallback
     * @return Block
     */
    public function setBlockCallback($blockCallback): self
    {
        $this->blockCallback = $blockCallback;
        return $this;
    }

    /**
     * @param mixed $blockDescription
     * @return Block
     */
    public function setBlockDescription($blockDescription): self
    {
        $this->blockDescription = $blockDescription;
        return $this;
    }

    /**
     * @param mixed $blockKeywords
     * @return Block
     */
    public function setBlockKeywords($blockKeywords): self
    {
        $this->blockKeywords = $blockKeywords;
        return $this;
    }

    /**
     * @param mixed $blockIcon
     * @return Block
     */
    public function setBlockIcon($blockIcon): self
    {
        $this->blockIcon = $blockIcon;
        return $this;
    }

    /**
     * @param $catSlug
     * @param $catName
     * @return $this
     */
    public function setCat($catSlug, $catName): self
    {
        $this->catName = $catName;
        $this->catSlug = $catSlug;

        add_filter('block_categories', [$this, 'newCategoryTask'], 10, 1);
        return $this;
    }

    /**
     *
     */
    public function saveBlock(): void
    {
        // Register a testimonial ACF Block
        if (function_exists('acf_register_block')) {
            acf_register_block([
                'name' => $this->blockName,
                'title' => __($this->blockTitle),
                'description' => __($this->blockDescription),
                'render_callback' => $this->blockCallback,
                'category' => $this->catSlug,
                'icon' => $this->blockIcon,
                'keywords' => $this->blockKeywords,
                'allowedPostTypes' => [
                    'post',
                    'page'
                ],
                'allowedTemplates' => [

                ],
                'allowedPages' => [

                ]
            ]);
        }
    }

    /**
     * @param $categories
     * @return array
     */
    public function newCategoryTask($categories): array
    {
        return array_merge(
            $categories,
            [
                [
                    'slug' => $this->catSlug,
                    'title' => __($this->catName, 'erebus')
                ],
            ]
        );
    }
}