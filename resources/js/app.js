import './bootstrap';
import '../css/app.css';
import jQuery from 'jquery';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

window.$ = jQuery;

import {ArticleLike} from "./user/article-like";

$('.article-like-btn').on('click', (event) => {
    ArticleLike(event.currentTarget)
})
