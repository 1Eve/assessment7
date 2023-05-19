<?php
/**
 * @package MyPlugin
 */

namespace Inc\Api;

class SettingsApi {

    public $admin_pages = array();
    public $admin_subpages = array();

    public function addPages(array $pages) {
        $this->admin_pages = $pages;
        return $this;
    }

    public function addSubPages(array $subpages) {
        $this->admin_subpages = $subpages;
        return $this;
    }

    public function register() {
        if (!empty($this->admin_pages)) {
            add_action('admin_menu', [$this, 'addAdminMenu']);
        }
    }

    public function addAdminMenu() {
        foreach ($this->admin_pages as $page) {
            add_menu_page(
                $page['page_title'],
                $page['menu_title'],
                $page['capability'],
                $page['menu_slug'],
                $page['callback']
            );
        }

        foreach ($this->admin_subpages as $subpage) {
            add_submenu_page(
                $subpage['parent_slug'],
                $subpage['page_title'],
                $subpage['menu_title'],
                $subpage['capability'],
                $subpage['menu_slug'],
                $subpage['callback']
            );
        }
    }

}
