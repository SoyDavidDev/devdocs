import reflex as rx
from link_bio.componentes.link_icon import link_icon
from link_bio.componentes.info_text import info_text
from link_bio.componentes.title import title
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
                f"{experience()-1}",
                "años de experiencia"
            ),
            width="100%"
        ),
        rx.text("""Actualmente estoy formándome en 2ºDAW como developer. 
            Formado en PYTHON, PHP, SQL, HTML-CSS-JS, JAVA, C# y PYTHON WEB.
            Conozco Frameworks/librerías como DJANGO, LARAVEL, BOOTSTRAP, ANGULAR,
             REACT, SPRING y REFLEX (en continua formación y autodidacta).
            Aquí podrás encontrar todos mis enlaces de interés, Linkedin, 
            GIT-HUB y demás proyectos (en construcción)""",
            font_size=Size.DEFAULT.value,
            color=TextColor.BODY.value,
            text_align = "justify",
        ),
                rx.text("""Buscando adquirir 
            experiencia, me ayudas!? :) 
            ¡Bienvenid@!""",
            font_size=Size.DEFAULT.value,
            color=TextColor.BODY.value,
        ),
        spacing = Size.BIG.value,
        align_items= "start"
    )

def experience() -> int:
    return datetime.date.today().year - 2022