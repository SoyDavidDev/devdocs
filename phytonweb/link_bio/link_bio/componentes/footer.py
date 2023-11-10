import reflex as rx
import datetime
import link_bio.constants as const
from link_bio.styles.styles import Size as Size
from link_bio.styles.colors import Color as Color
from link_bio.styles.colors import TextColor as TextColor

def footer() -> rx.Component:
    return rx.vstack(
        rx.image(
            src="favicon.png",
            height = Size.VERY_BIG2.value
        ),
        rx.link(
            rx.box(
                f"© 2022-{datetime.date.today().year} ",
                rx.span(" by SoyDavidDev. ",
                        color = Color.PRIMARY.value),
                        " vBeta."
            ),
            href=const.LINKEDIN_URL,
            is_external=True,
            font_size = Size.MEDIUM.value
        ),
        rx.text("Creando y aprendiendo SOFTWARE con ♥ FROM VALENCIA.",
            font_size = Size.MEDIUM.value,
            margin_top= Size.ZERO.value

        ),
        margin_top=Size.BIG.value,
        margin_bottom=Size.BIG.value,
        padding_bottom= Size.BIG.value,
        spacing=Size.DEFAULT.value,
        color=TextColor.FOOTER.value
    )