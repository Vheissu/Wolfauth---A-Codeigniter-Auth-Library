<?php

function logged_in()
{
    return auth_instance()->logged_in();
}

function get_user()
{
    return auth_instance()->get_user();
}

function login($identity, $password, $remember = false)
{
    return auth_instance()->login($identity, $password, $remember);
}

function logout($redirect = '')
{
    return auth_instance()->logout($redirect)
}

function register($username, $email, $password, $role = 2)
{
    return auth_instance()->register($username, $email, $password, $role);
}

function update()
{
    return auth_instance()->update_user();
}

function get_capabilities($role)
{
    return auth_instance()->get_capabilities($role);
}

function get_role($needle, $haystack = 'id')
{
    return auth_instance()->get_role($needle, $haystack);
}

function add_capability($capability)
{
    return auth_instance()->add_capability($capability);
}

function delete_capability($name, $delete_relationships = TRUE)
{
    return auth_instance()->delete_capability($name, $delete_relationships);
}

function add_capability_to_role($role, $capability)
{
    return auth_instance()->add_capability_to_role($role, $capability);
}

function delete_capability_relationships($name)
{
    return auth_instance()->delete_capability_relationships($name);
}

function is_role($slug)
{
    return auth_instance()->is_role($slug);
}

function add_role($role, $display_name)
{
    return auth_instance()->add_role($role, $display_name);
}

function update_role($role, $data = array())
{
    return auth_instance()->update_role($role, $data);
}

function delete_role($role, $delete_relationships = TRUE)
{
    return auth_instance()->delete_role($role, $delete_relationships);
}

function user_can($capability, $user_id = 0)
{
    return auth_instance()->user_can($capability, $user_id);
}

function hash($str)
{
    return auth_instance()->hash($str);
}