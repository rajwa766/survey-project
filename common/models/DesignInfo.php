<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "design_info".
 *
 * @property int $id
 * @property string $country
 * @property int $hague
 * @property int $maxterm
 * @property string $renewals
 * @property string $renewals_details
 * @property string $grace
 * @property string $grace_details
 * @property int $max_no
 * @property string $what
 * @property string $what_details
 * @property int $subst_exam
 * @property string $fees
 * @property string $misc
 * @property string $misc_details
 * @property string $description
 * @property string $claim
 * @property string $req_docs
 * @property string $req_docs_details
 * @property string $deferment_period
 * @property string $reprod
 * @property string $reprod_details
 * @property int $dashed
 * @property int $shading
 * @property int $sections
 */
class DesignInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'design_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['country', 'hague', 'maxterm', 'renewals', 'renewals_details', 'grace', 'grace_details', 'max_no', 'what', 'what_details', 'subst_exam', 'fees', 'misc', 'misc_details', 'description', 'claim', 'req_docs', 'req_docs_details', 'deferment_period', 'reprod', 'reprod_details', 'dashed', 'shading', 'sections'], 'required'],
            [['hague', 'maxterm', 'max_no', 'subst_exam', 'dashed', 'shading', 'sections'], 'integer'],
            [['renewals_details', 'grace_details', 'what_details', 'fees', 'misc_details', 'req_docs_details', 'reprod_details'], 'string'],
            [['country', 'renewals', 'grace', 'what', 'misc', 'description', 'claim', 'req_docs', 'deferment_period', 'reprod'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'country' => Yii::t('app', 'Country'),
            'hague' => Yii::t('app', 'Hague'),
            'maxterm' => Yii::t('app', 'Maxterm'),
            'renewals' => Yii::t('app', 'Renewals'),
            'renewals_details' => Yii::t('app', 'Renewals Details'),
            'grace' => Yii::t('app', 'Grace'),
            'grace_details' => Yii::t('app', 'Grace Details'),
            'max_no' => Yii::t('app', 'Max No'),
            'what' => Yii::t('app', 'What'),
            'what_details' => Yii::t('app', 'What Details'),
            'subst_exam' => Yii::t('app', 'Subst Exam'),
            'fees' => Yii::t('app', 'Fees'),
            'misc' => Yii::t('app', 'Misc'),
            'misc_details' => Yii::t('app', 'Misc Details'),
            'description' => Yii::t('app', 'Description'),
            'claim' => Yii::t('app', 'Claim'),
            'req_docs' => Yii::t('app', 'Req Docs'),
            'req_docs_details' => Yii::t('app', 'Req Docs Details'),
            'deferment_period' => Yii::t('app', 'Deferment Period'),
            'reprod' => Yii::t('app', 'Reprod'),
            'reprod_details' => Yii::t('app', 'Reprod Details'),
            'dashed' => Yii::t('app', 'Dashed'),
            'shading' => Yii::t('app', 'Shading'),
            'sections' => Yii::t('app', 'Sections'),
        ];
    }
}
