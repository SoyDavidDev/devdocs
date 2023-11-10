import reflex as rx
from link_bio.styles.styles import Size as Size
import link_bio.styles.styles as styles
from link_bio.styles.styles import Color as Color


def navbar() -> rx.Component:
    return rx.hstack(
        rx.box(
            rx.span(
                "SoyDavid",
                color=Color.PRIMARY.value
            ),
            rx.span(
                "Dev",
                color=Color.SECONDARY.value,
            ),
            style = styles.navbar_title_style
        ),
        position="sticky",
        bg=Color.CONTENT.value,
        padding_x=Size.BIG.value,
        padding_y=Size.DEFAULT.value,
        z_index="999",
        top="0"

    )