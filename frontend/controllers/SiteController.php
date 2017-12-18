<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\db\Query;
/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * display s homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $data = \common\models\DesignInfo::find()->all();
        return $this->render('index',['data'=>$data]);
    }
    public function actionCountryDetail()
    {
        $data = \common\models\DesignInfo::find()->all();
        return $this->render('countries',['data'=>$data]);
    }
    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionAjax() {
       
        $id = $_POST['id'];
        $country  = (new Query())
        ->select('*')
        ->from('design_info')
        ->where(['=', 'id', $id])
        ->one();
       
        $model_vehicle = ''; 
            $model_vehicle.='    <tr class="country_'.$country['id'].'">
            <td  class="">'.$country['country'].' </td>
            <td  class="display  hague">'.$country['hague'].' </td>
            <td  class="display  maxterm">'.$country['maxterm'].' </td>
            <td  class="display renewals">'.$country['renewals'].' </td>
            <td  class="display grace">'.$country['grace'].' </td>
            <td  class="display max_no">'.$country['max_no'].' </td>
            <td  class="display what">'.$country['what'].' </td>
            <td  class="display subst_exam">'.$country['subst_exam'].' </td>
            <td  class="display fees">'.$country['fees'].' </td>
         
            <td  class="display description">'.$country['description'].' </td>
            <td  class="display claim">'.$country['claim'].' </td>
            <td  class="display req_docs">'.$country['req_docs'].' </td>
            <td  class="display deferment_period">'.$country['deferment_period'].' </td>
            <td  class="display reprod">'.$country['reprod'].' </td>
            <td  class="display dashed">'.$country['dashed'].' </td>
            <td  class="display shading">'.$country['shading'].' </td>
            <td  class="display sections">'.$country['sections'].' </td>
                  
    </tr>'
  ;
  return $model_vehicle;
}
    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * display s contact page.
     *
     * @return mixed
     */
    

    /**
     * display s about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
    public function actionPriceCalculator()
    {
        return $this->render('price-calculator');
    }
    public function actionFigureInfo()
    {
        return $this->render('figure-info');
    }
    public function actionWhyDesign()
    {
        return $this->render('why-design');
    }
    public function actionStrategy()
    {
        return $this->render('strategy');
    }
    public function actionAboutGuardian()
    {
        return $this->render('about-guardian');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }
  

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}
