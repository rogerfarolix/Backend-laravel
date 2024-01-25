
### Points d'accès API pour l'utilisateur :
note : Toutes les routes, à l'exception de (register et login), nécessitent un jeton csrf pour l'accès.

| Verbes HTTP | Points d'accès | Action |
| --- | --- | --- |
| POST | /api/register | Pour créer un nouveau compte utilisateur |
| POST | /api/login | Pour se connecter à un compte utilisateur existant |
| POST | api/task | Pour créer une nouvelle tâche |
| GET | /api/causes | Pour récupérer toutes les tâches de la plateforme |
| GET | api/task/{task} | Pour récupérer les détails d'une tâche précise |
| PATCH/PUT | api/task/{task} | Pour modifier les détails d'une tâche spécifique |
| DELETE | api/task/{task} | Pour supprimer une tâche |


### Points d'accès API pour l'utilisateur :

| Verbes HTTP | Points d'accès | Action |
| --- | --- | --- |
| GET | /api/index | Pour récupérer toutes les tâches de la plateforme |
| GET | api/show/{task:id} | Pour récupérer les détails d'une tâche spécifique |

