<?php


if( ! function_exists( 'is_subpage' ) ) {
    /**
     * Функция проверяет текущий объект, является ли он подстраницей
     * @param integer $post_parent_id ИД родительской страницы, если необходимо
     *     boolean Или false, если данный атрибут необходимо пропустить
     * @param WP_Post $post Объект записи, если необходимо
     * null Или null, если необходимо опустить параметр
     * @return boolean Возвращает результат проверки
     * integer Или ИД родителя, если $post_parent_id = false
     */
    function is_subpage( $post_parent_id = false, $post = null ) {
        if( is_null( $post ) ) global $post;
        if( ! is_page() ) return false;

        if( $post->post_parent ) {
            if( $post_parent_id ) {
                if( $post->post_parent != $post_parent_id && $post->post_parent > 0 ) {
                    return is_subpage( $post_parent_id, get_post( $post->post_parent ) );
                } else return true;
            } else return $post->post_parent;
        } else {
            return false;
        }
    }
}














