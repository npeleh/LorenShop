<?php

namespace LorenShop\Controller;

use LorenShop\Entity\Registration;
use LorenShop\Mapper\RegistrationMapper;
use LorenShop\Repository\RegistrationRepository;

class RegistrationController {

    public function RegistrationCategoryList() {

        $registrationMapper = new RegistrationMapper(
            new RegistrationRepository()
        );

        $registration = $registrationMapper->findAllRegistrationCategories();

        return $registration;
    }
    public function Regisrer()
    {
        $registrationRepository =
            new RegistrationRepository();
        $registration = $registrationRepository->RegisterUser();
        return $registration;

    }
    public function RegistrationCategoryShow(int $id): Registration {
        $registrationMapper = new RegistrationMapper(new RegistrationRepository());

        $registration = $registrationMapper->findRegistrationCategoriesById($id);

        return $registration;
    }

}
?>