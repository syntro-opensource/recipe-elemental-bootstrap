<?php

namespace Model\Elements;

use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\GridField\GridField;
use DNADesign\Elemental\Models\BaseElement;
use Syntro\SilverStripeElementalBaseitem\Forms\GridFieldConfig_ElementalChildren;
use Model\Elements\Card;

/**
 * A section displaying cards
 *
 * NOTE: This serves as a starting point for your own implementation of a card
 * deck using bootstrap. Add more options or more styles as you see fit.
 *
 * @author Matthias Leutenegger <hello@syntro.ch>
 */
class CardDeckSection extends BaseElement
{
    /**
     * Defines the database table name
     * @config
     * @var string
     */
    private static $table_name = 'Section_CardDeck';

    /**
     * @config
     * @var bool
     */
    private static $inline_editable = false;

    /**
     * @config
     * @var string
     */
    private static $icon = 'font-icon-block-layout-5';

    /**
     * @config
     * @var array
     */
    private static $styles = [];

    /**
     * @config
     * @var array
     */
    private static $has_many = [
        'Cards' => Card::class
    ];

    /**
     * Add default values to database
     * @config
     * @var array
     */
    private static $cascade_duplicates = [
        'Cards'
    ];

    /**
     * @return FieldList
     */
    public function getCMSFields()
    {
        $this->beforeUpdateCMSFields(function ($fields) {
            if ($this->ID) {
                /** @var GridField $entries */
                $entries = $fields->fieldByName('Root.Cards.Cards');
                $entries->setConfig(GridFieldConfig_ElementalChildren::create());
                $fields->removeByName('Cards');
                $fields->addFieldToTab(
                    'Root.Main',
                    $entries
                );
            }
        });
        return parent::getCMSFields();
    }

    /**
     * getType
     *
     * @return string
     */
    public function getType()
    {
        return _t(__CLASS__ . '.BlockType', 'Card Deck');
    }


    /**
     * @return string
     */
    public function getSummary()
    {
        $childrenCount = $this->Cards()->count();
        if ($childrenCount > 0) {
            return sprintf(
                '%s: "%s"',
                _t(
                    __CLASS__ . '.SUMMARY',
                    'one card|{count} cards',
                    ['count' => $childrenCount]
                ),
                implode('", "', $this->Cards()->map('Title')->keys())
            );
        }
        return _t(
            __CLASS__ . '.SUMMARY',
            'one card|{count} cards',
            ['count' => $childrenCount]
        );
    }


    /**
     * @return array
     */
    protected function provideBlockSchema()
    {
        $blockSchema = parent::provideBlockSchema();
        $blockSchema['content'] = $this->getSummary();
        return $blockSchema;
    }
}
