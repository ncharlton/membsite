<?php

namespace AppBundle\Controller\Admin;

use AppBundle\Entity\Setting;
use AppBundle\Entity\SettingCategory;
use AppBundle\Form\Admin\SettingAdminForm;
use AppBundle\Form\SettingCategoryAdminForm;
use AppBundle\Service\SettingService;
use Knp\Component\Pager\Paginator;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class SettingAdminController
 * @package AppBundle\Controller\Admin
 * @Route("admin/setting")
 *
 * @Security("is_granted('ROLE_SUPER_ADMIN')")
 */
class SettingAdminController extends Controller
{
    /**
     * @Route("/", name="admin_setting_index")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $dql = "SELECT settings, settingCategory FROM AppBundle:Setting settings JOIN settings.setting_category settingCategory";
        $query = $em->createQuery($dql);
        /**
         * @var Paginator $paginator
         */
        $paginator = $this->get('knp_paginator');
        $result = $paginator->paginate($query);

        $settingCategories = $em->getRepository(SettingCategory::class)
            ->findAll();

        return $this->render(':admin/setting:index.html.twig', [
            'settings' => $result,
            'settingCategories' => $settingCategories,
            'settingCategory' => SettingCategory::class
        ]);
    }

    /**
     * @Route("/new", name="admin_setting_new")
     */
    public function newAction(Request $request) {
        $form = $this->createForm(SettingAdminForm::class);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            /**
             * @var Setting $setting
             */
            $setting = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($setting);
            $em->flush();

            $this->addFlash(
                'success',
                'Setting created'
            );

            return $this->redirectToRoute("admin_setting_index");
        }

        return $this->render("admin/setting/new.html.twig", [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/{key}/edit", name="admin_setting_edit")
     * @ParamConverter("setting", options={"mapping" : {"key" : "setting_key"}})
     */
    public function editAction(Request $request, Setting $setting) {
        $form = $this->createForm(SettingAdminForm::class, $setting);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            /**
             * @var Setting $setting
             */
            $setting = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($setting);
            $em->flush();

            $this->addFlash(
                'success',
                'Setting edited'
            );

            return $this->redirectToRoute("admin_setting_edit", [
                'key' => $setting->getSettingKey(),
            ]);
        }

        return $this->render("admin/setting/edit.html.twig", [
            'form' => $form->createView(),
            'setting' => $setting
        ]);
    }

    /**
     * @Route("/{key}/delete", name="admin_setting_delete")
     * @ParamConverter("setting", options={"mapping" : {"key" : "setting_key"}})
     */
    public function deleteAction(Setting $setting) {
        $em = $this->getDoctrine()->getManager();
        $em->remove($setting);
        $em->flush();

        $this->addFlash(
            'success',
            'successully removed'
        );

        return $this->redirectToRoute("admin_setting_index");
    }

    /**
     * @Route("/category/", name="admin_setting_category_index")
     */
    public function indexCategoryAction() {
        $settingCategories = $this->getDoctrine()
            ->getRepository(SettingCategory::class)
            ->findAll();

        return $this->render(":admin/setting/category:index.html.twig", [
            'settingCategories' => $settingCategories
        ]);
    }



    /**
     * @Route("/category/new", name="admin_setting_category_new")
     */
    public function newCategoryAction(Request $request) {
        $form = $this->createForm(SettingCategoryAdminForm::class);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            /**
             * @var SettingCategory $settingCategory
             */
            $settingCategory = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($settingCategory);
            $em->flush();

            $this->addFlash(
                'success',
                'Setting category created!'
            );

            return $this->redirectToRoute("admin_setting_category_index");
        }

        return $this->render(":admin/setting/category:new.html.twig", [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/category/{category}", name="admin_setting_list")
     * @ParamConverter("category", options={"mapping" : {"category" : "setting_category_name"}})
     */
    public function listCategoryAction(SettingCategory $category) {
        $settings = $this->getDoctrine()->getRepository(Setting::class)
            ->findBy([
                'setting_category' => $category
            ]);

        $settingCategories = $this->getDoctrine()->getRepository(SettingCategory::class)
            ->findAll();

        /** @var Paginator $paginator */
        $paginator = $this->get('knp_paginator');
        $result = $paginator->paginate($settings);

        return $this->render("admin/setting/index_category.html.twig", [
            'settings' => $result,
            'settingCategories' => $settingCategories,
            'category' => $category
        ]);
    }

    /**
     * @Route("/category/{category}/edit", name="admin_setting_category_edit")
     * @ParamConverter("category", options={"mapping" : {"category" : "setting_category_name"}})
     */
    public function editCategoryAction(Request $request, SettingCategory $category) {
        $form = $this->createForm(SettingCategoryAdminForm::class, $category);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            /**
             * @var SettingCategory $settingCategory
             */
            $settingCategory = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($settingCategory);
            $em->flush();

            $this->addFlash(
                'success',
                'Setting Category successfully edited!'
            );

            return $this->redirectToRoute("admin_setting_category_edit", [
                'category' => $settingCategory->getSettingCategoryName()
            ]);
        }

        return $this->render("admin/setting/category/edit.html.twig", [
            'form' => $form->createView(),
            'settingCategory' => $category
        ]);
    }

    /**
     * @Route("category/{category}/delete", name="admin_setting_category_delete")
     * @ParamConverter("category", options={"mapping" : {"category" : "setting_category_name"}})
     */
    public function deleteCategoryAction(SettingCategory $category) {
        $em = $this->getDoctrine()->getManager();
        $em->remove($category);
        $em->flush();

        $this->addFlash(
            'success',
            'successully removed'
        );

        return $this->redirectToRoute("admin_setting_category_index");
    }
}
