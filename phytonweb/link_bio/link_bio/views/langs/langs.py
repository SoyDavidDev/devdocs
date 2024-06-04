import reflex as rx
import link_bio.constants as const
from link_bio.styles.styles import Size as Size
from link_bio.componentes.title import title
from link_bio.componentes.link_langs import link_langs


def langs() -> rx.Component:
    return rx.vstack(
        title("Lenguajes, Marcas y Estilos"),
        rx.hstack(
            link_langs("icons/python.svg"),
            link_langs("icons/java.svg"),
            link_langs("icons/php.svg"),
            link_langs("icons/mysql.svg"),
            spacing = Size.LARGE.value,
        ),
            rx.hstack(
            link_langs("icons/html5.svg"),
            link_langs("icons/css3-alt.svg"),
            link_langs("icons/square-js.svg"),
            spacing = Size.LARGE.value,
        ),
        title("Frameworks y Librerías"),
        rx.hstack(
            link_langs("icons/django.svg"),
            link_langs("icons/vuejs.svg"),
            link_langs("icons/angular.svg"),
            link_langs("icons/laravel.svg"),
            spacing = Size.LARGE.value,
        ),
        width="100%",
        align_items="center",
        spacing=Size.VERY_BIG.value,
    )