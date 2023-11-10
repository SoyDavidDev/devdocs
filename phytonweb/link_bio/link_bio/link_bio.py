import reflex as rx
from link_bio.componentes.navbar import navbar
from link_bio.views.header.header import header
from link_bio.views.links.links import links
from link_bio.views.langs.langs import langs
from link_bio.componentes.footer import footer
import link_bio.styles.styles as styles
from link_bio.styles.styles import Size as Size



class State(rx.State):
    pass

def index()-> rx.Component:
    return rx.box(
        navbar(),
        rx.center(
            rx.vstack(
            header(),
            links(),
            langs(),
            max_width = styles.MAX_WIDTH,
            width = "100%",
            margin_y = Size.BIG.value,
            padding = Size.BIG.value
           ),
        ),
       footer()
    )




app = rx.App(
    style=styles.BASE_STYLE
)
app.add_page(
    index,
    title="SoyDavidDev | Aprendiendo y trabajando en programación y desarrollo de software",
    description="Hola, mi nombre es David Sánchez, Soy Desarrollador Web en formación. |Developer|Backend|Frontend|FullStack|",
    image="favicon.ico"
)
app.compile()