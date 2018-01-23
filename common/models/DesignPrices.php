<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "design_prices".
 *
 * @property int $id
 * @property string $Country
 * @property int $WIPO
 * @property double $OfficialFee1
 * @property int $OfficialFee2plus
 * @property double $OurFeeSimple1
 * @property double $OurFeeSimple2plus
 * @property double $OurFeeDetailed1
 * @property double $OurFeeDetailed2plus
 * @property double $AgentFee1
 * @property double $AgentFee2plus
 */
class DesignPrices extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'design_prices';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Country', 'WIPO', 'OfficialFee1', 'OfficialFee2plus', 'OurFeeSimple1', 'OurFeeSimple2plus', 'OurFeeDetailed1', 'OurFeeDetailed2plus', 'AgentFee1', 'AgentFee2plus'], 'required'],
            [['WIPO', 'OfficialFee2plus'], 'integer'],
            [['OfficialFee1', 'OurFeeSimple1', 'OurFeeSimple2plus', 'OurFeeDetailed1', 'OurFeeDetailed2plus', 'AgentFee1', 'AgentFee2plus'], 'number'],
            [['Country'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'Country' => Yii::t('app', 'Country'),
            'WIPO' => Yii::t('app', 'Wipo'),
            'OfficialFee1' => Yii::t('app', 'Official Fee1'),
            'OfficialFee2plus' => Yii::t('app', 'Official Fee2plus'),
            'OurFeeSimple1' => Yii::t('app', 'Our Fee Simple1'),
            'OurFeeSimple2plus' => Yii::t('app', 'Our Fee Simple2plus'),
            'OurFeeDetailed1' => Yii::t('app', 'Our Fee Detailed1'),
            'OurFeeDetailed2plus' => Yii::t('app', 'Our Fee Detailed2plus'),
            'AgentFee1' => Yii::t('app', 'Agent Fee1'),
            'AgentFee2plus' => Yii::t('app', 'Agent Fee2plus'),
        ];
    }
}
