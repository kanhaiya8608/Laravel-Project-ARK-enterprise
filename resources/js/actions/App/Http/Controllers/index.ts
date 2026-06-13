import ArticleController from './ArticleController'
import Settings from './Settings'

const Controllers = {
    ArticleController: Object.assign(ArticleController, ArticleController),
    Settings: Object.assign(Settings, Settings),
}

export default Controllers