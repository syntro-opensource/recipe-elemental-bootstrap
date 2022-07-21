<?php

namespace Model\Elements;

use SilverStripe\Forms\DropdownField;
use SilverStripe\Forms\FieldList;
use SilverStripe\Assets\Image;
use SilverStripe\AssetAdmin\Forms\UploadField;
use Syntro\SilverStripeElementalBaseitem\Model\BaseItem;
use gorriecoe\Link\Models\Link;
use gorriecoe\LinkField\LinkField;

/**
 * A card with an Image and link
 *
 * NOTE: This serves as a starting point for your own implementation of a card
 * using bootstrap.
 *
 * @author Matthias Leutenegger <hello@syntro.ch>
 */
class Card extends BaseItem
{

    /**
     * Defines the database table name
     * @config
     * @var string
     */
    private static $table_name = 'Section_CardDeck_Card';

    /**
     * @config
     * @var bool
     */
    private static $displays_title_in_template = true;

    /**
     * @config
     * @var array
     */
    private static $db = [
        'Content' => 'HTMLText',
        'Size' => 'Enum("small,medium,large,huge", "medium")',
    ];

    /**
     * @config
     * @var array
     */
    private static $has_one = [
        'Section' => CardDeckSection::class,
        'Image' => Image::class,
        'Link' => Link::class
    ];

    /**
     * Tell SS which files to duplicate alongside this section
     * @config
     * @var array
     */
    private static $cascade_duplicates = [
        'Link'
    ];

    /**
     * Add default values to database
     * @config
     * @var array
     */
    private static $defaults = [
        'Size' => 'medium'
    ];

    /**
     * Defines summary fields commonly used in table columns
     * as a quick overview of the data for this dataobject
     * @config
     * @var array
     */
    private static $summary_fields = [
        'Image.StripThumbnail' => 'Icon',
        'Title' => 'Title'
    ];

    /**
     * Relationship version ownership
     * @config
     * @var array
     */
    private static $owns = [
        'Image',
        'Link'
    ];

    /**
     * @return FieldList
     */
    public function getCMSFields()
    {
        $this->beforeUpdateCMSFields(function ($fields) {
            /** @var FieldList $fields */
            $fields->removeByName([
                'SectionID',
                'LinkID'
            ]);

            $fields->addFieldToTab(
                'Root.Main',
                $imageField = UploadField::create(
                    'Image',
                    'Image'
                ),
                'Title'
            );
            $imageField->setFolderName('Sections/Cards');
            $imageField->setAllowedExtensions(['png','jpg','jpeg']);
            $imageField->setRightTitle('renders as 800px by 440px');

            $fields->addFieldToTab(
                'Root.Main',
                LinkField::create(
                    'Link',
                    $this->fieldLabel('Link'),
                    $this
                )
            );

            $fields->addFieldToTab(
                'Root.Settings',
                DropdownField::create(
                    'Size',
                    'Size',
                    [
                        'small' => 'Small (33% width)',
                        'medium' => 'Medium (50% width)',
                        'large' => 'Large (66% width)',
                        'huge' => 'Huge (100% width)'
                    ]
                ),
                'Image'
            );

        });

        return parent::getCMSFields();
    }

}
