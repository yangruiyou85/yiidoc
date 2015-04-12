# Introdução #

Atualmente estamos traduzindo o Guia definitivo para o Yii e esta é a principal prioridade no momento.

# Arquivos em tradução: #
  * /messages/pt\_br/yii.php (Ricardo)
  * /guide/pt\_br/basics.controller (Luiz.uo)


# Arquivos já traduzidos: #

**Guia Definitivo para o Yii**:

  * /guide/pt\_br/quickstart.what-is-yii.txt (Luiz)
  * /guide/pt\_br/quickstart.installation.txt (Luiz)
  * /guide/pt\_br/quickstart.first-app.txt (Luiz)
  * /guide/pt\_br/basics.mvc.txt (Luiz)
  * /guide/pt\_br/basics.entry.txt (Luiz)
  * /guide/pt\_br/basics.application.txt (Luiz)
  * /guide/pt\_br/basics.model.txt (Davi)
  * /guide/pt\_br/basics.view.txt (Davi)
  * /guide/pt\_br/basics.component.txt (Davi)
  * /guide/pt\_br/basics.namespace.txt (Davi)
  * /guide/pt\_br/basics.convention.txt (Davi)
  * /guide/pt\_br/basics.workflow.txt (Davi)
  * /guide/pt\_br/form.overview.txt     (Wanderson C. Bragança)
  * /guide/pt\_br/database.overview.txt (Wanderson C. Bragança)
  * /guide/pt\_br/index.txt             (Wanderson C. Bragança)
  * /guide/pt\_br/form.model.txt (Davi)
  * /guide/pt\_br/form.action.txt (Davi)
  * /guide/pt\_br/form.view.txt (Davi)
  * /guide/pt\_br/form.table.txt (Davi)
  * /guide/pt\_br/database.dao.txt (Davi)
  * /guide/pt\_br/database.ar.txt (Davi)
  * /guide/pt\_br/database.arr.txt (Davi)
  * /guide/pt\_br/caching.overview.txt (Davi)
  * /guide/pt\_br/caching.data.txt (Davi)
  * /guide/pt\_br/caching.fragment.txt (Davi)
  * /guide/pt\_br/caching.page.txt (Davi)
  * /guide/pt\_br/caching.dynamic.txt (Davi)

**Mensagens do Framework Yii**:
  * /views/pt\_br/error400.php (Luiz)
  * /views/pt\_br/error401.php (Luiz)
  * /views/pt\_br/error404.php (Luiz)
  * /views/pt\_br/error500.php(Luiz)
  * /views/pt\_br/error503.php (Luiz)
  * /views/pt\_br/error.php (Luiz)
  * /views/pt\_br/exception.php (Luiz)
  * /views/pt\_br/log.php (Luiz)
  * /views/pt\_br/log-firebug.php (Luiz)
  * /views/pt\_br/profile-callstack.php(Luiz)
  * /views/pt\_br/profile-callstack-firebug.php (Luiz)
  * /views/pt\_br/profile-summary.php (Luiz)
  * /views/pt\_br/profile-summary-firebug.php (Luiz)
  * /requirements/views/pt\_br/index.php (Luiz)
  * /requirements/messages/pt\_br/yii.php (Flávio - Revisado por Luiz )

**The Yii Blog Tutorial**:

  * /blog/pt\_br/comment.admin.txt      (Wanderson C. Bragança)
  * /blog/pt\_br/start.overview.txt     (Wanderson C. Bragança)
  * /blog/pt\_br/start.requirements.txt (Wanderson C. Bragança)
  * /blog/pt\_br/toc.txt                (Wanderson C. Bragança)
  * /blog/pt\_br/start.testdrive.txt    (Wanderson C. Bragança)



# Convenções adotadas na tradução #

**Lista de convenções**:
  * Use sempre o identificador [pt\_br](pt_br.md) no início das suas mensagens de commit
  * Mais convenções a definir

# Observações #
  * Lembre-se sempre de dar o _Update_ no svn antes de editar um arquivo.
  * Para começar a traduzir e também sincronizar a tradução para a mais atual, vá no console de seu sistema operacional e na linha de comando digite:
    * Tradução do Guide:
      * **protected/yiic syncguide pt**
    * Tradução do Framework:
> > > (Necessário o framework do Yii, que contém a pasta e a o arquivo build.)
      * **build message ../framework/messages/config.php**
      * **build message ../requirements/messages/config.php**

> > OBS: Utilitario de merge para Windows http://sourceforge.net/project/downloading.php?groupname=winmerge&filename=WinMerge-2.12.2-Setup.exe&use_mirror=ufpr

  * Lembre-se sempre de salvar as traduções no formato UTF-8 (UTF-8 Plain) sem BOM.
  * Quem participar da tradução do Guide deve colocar seus créditos no arquivo /guide/pt\_br/index.php.
  * As traduções estarão disponíveis no site do Yii Framework a cada lançamento do mesmo.
  * Para visualizar e testar suas traduções utilize o seguinte modelo de URL:
> > http://endereco/yiidoc/index.php?r=guide
  * Para traduzir o título dos quadros de Notas e Dicas (Note / Tips) utilize o separador |, veja a seguir:
    * >Note|Nota: ...
    * >Tip|Dica: ...
  * Consulte o Readme para saber como sincronizar o Guia e as Messages e manter a documentação sempre atualizada.