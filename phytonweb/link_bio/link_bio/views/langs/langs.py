import reflex as rx
import link_bio.constants as const
from link_bio.styles.styles import Size as Size
from link_bio.componentes.title import title
from link_bio.componentes.link_langs import link_langs


def langs() -> rx.Component:
    return rx.vstack(
        title("Formación en Lenguajes de Desarrollo",
        ),
        rx.hstack(
            link_langs("icons/python.svg"),
            link_langs("icons/java.svg"),
            link_langs("icons/php.svg"),
            link_langs("icons/html5.svg"),
            link_langs("icons/css3-alt.svg"),
            link_langs("icons/square-js.svg"),
            spacing = Size.BIG.value
        ),
        width="100%",
        align_items="start",
        spacing=Size.BIG.value,
    )