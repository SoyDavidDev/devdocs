import reflex as rx
from enum import Enum
from .colors import Color as Color
from .colors import TextColor as TextColor
from .fonts import Font as Font

#constants
MAX_WIDTH = "560px"

#sizes

class Size(Enum):
    ZERO = "0px !important"
    SMALL = "0.5em"
    MEDIUM = "0.8em"
    DEFAULT = "1em"
    LARGE = "1.5em"
    BIG = "2em"
    VERY_BIG = "4em"
    VERY_BIG2 = "6em"

# styles

BASE_STYLE = {
    "font_family": Font.DEFAULT.value,
    "background_color": Color.BACKGROUND.value,
    rx.Heading: {
        "color": TextColor.HEADER.value,
        "font_family": Font.TITLE.value
    },
    rx.Button: {
        "width": "100%",
        "height": "100%",
        "display": "block",
        "padding": Size.LARGE.value,
        "border_radius": Size.DEFAULT.value,
        "color": TextColor.HEADER.value,
        "background_color": Color.CONTENT.value,
        "_hover": {
            "background_color": Color.SECONDARY.value
        }
    },
    rx.Link: {
        "text_decoration": "none",
        "_hover": {} # el hover no tendrá ninguna modificación al dejarlo vacío
    }
}

navbar_title_style = dict(
    font_family = Font.LOGO.value,
    font_size=Size.LARGE.value
)

title_style = dict(
    padding_top=Size.DEFAULT.value,
    font_size=Size.LARGE.value
)
button_title_style = dict(
    font_family=Font.TITLE.value,
    font_size=Size.DEFAULT.value,
    color=TextColor.HEADER.value
)

button_body_style = dict(
    font_size = Size.MEDIUM.value,
    color = TextColor.BODY.value
)