import reflex as rx
from link_bio.componentes.link_icon import link_icon
from link_bio.componentes.info_text import info_text
from link_bio.styles.styles import Size as Size
from link_bio.styles.colors import TextColor as TextColor
from link_bio.styles.colors import Color as Color
import link_bio.constants as const
import datetime


def header()-> rx.Component:
    return rx.vstack(
        rx.hstack(
            rx.avatar(
                name="David Dev", 
                size="xl",
                src="avatar2.png",
                color = TextColor.BODY.value,
                bg= Color.CONTENT.value,
                padding = "2px",
                border = "4px",
                border_color = Color.PRIMARY.value
            ),
            rx.vstack(
                rx.heading(
                    "David Sánchez Valero", 
                    size="lg",
                ),
                rx.text(
                    "@SoyDavidDev",
                    margin_top=Size.ZERO.value,
                    color = TextColor.BODY.value
                ),
                rx.hstack(
                link_icon("icons/linkedin.svg",const.LINKEDIN_URL),
                link_icon("icons/whatsapp.svg",const.WHATSAPP),
                link_icon("icons/github.svg",const.GITHUB_URL),
                link_icon("icons/id-card-solid.svg",const.CV),
                ),
                align_items= "center",
            ),
            spacing = Size.DEFAULT.value

        ),
        rx.flex(
            info_text(
                f"{experience()}+",
                "años de formación"
            ),            
            rx.spacer(),
            info_text(
                f"{experience()-1}+",
                "años de experiencia"
            ), 
            width="100%"
        ),
        rx.text("""Software Developer - Web - Backend - Frontend - FullStack""",
            font_size=Size.DEFAULT.value,
            color=TextColor.BODY.value,
            text_align = "center",
        ),

        rx.text("""Aprendiendo y trabajando en programación web y desarrollo 
                de software.""",
            font_size=Size.DEFAULT.value,
            color=TextColor.BODY.value,
            text_align = "center",
        ),
        rx.text("""Aquí podrás encontrar mis enlaces de interés, Linkedin, 
            Git-Hub y proyectos personales. ¡Gracias por visitar mi página!""",
            font_size=Size.DEFAULT.value,
            color=TextColor.BODY.value,
            text_align = "center",
        ),
        rx.text("""¡Bienvenid@!""",
            font_size=Size.DEFAULT.value,
            color=TextColor.BODY.value,
            text_align = "center",
        ),
        spacing = Size.BIG.value,
        align_items= "center",
        width = "100%"
    )

def experience() -> int:
    return datetime.date.today().year - 2022