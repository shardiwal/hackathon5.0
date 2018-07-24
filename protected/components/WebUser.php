<?php 
class WebUser extends CWebUser
{
    /**
     * Overrides a Yii method that is used for roles in controllers (accessRules).
     *
     * @param string $operation Name of the operation required (here, a role).
     * @param mixed $params (opt) Parameters for this operation, usually the object to access.
     * @return bool Permission granted?
     */
    public function checkAccess($operation, $params=array())
    {
        if (empty($this->id)) {
            // Not identified => no rights
            return false;
        }
        $role = $this->getState("roles");

        // allow access if the operation request is the current user's role
        return ($operation === $role);
    }

    public function isTester() {
        if ( $this->checkAccess('tester') ){
            return true;
        }
        return false;
    }

    public function isAdmin() {
        if ( $this->checkAccess('admin') ){
            return true;
        }
        return false;
    }

    public function isOperator() {
        if ( $this->checkAccess('operator') ){
            return true;
        }
        return false;
    }
}
