nav:
	./cms/cms.rb view html local/content/nav.yaml

content:
	./cms/cms.rb view html local/content/home.yaml
	./cms/cms.rb view html local/content/service-economy.yaml
	./cms/cms.rb view html local/content/2014-2015.yaml
	./cms/cms.rb view html local/content/2012-2013.yaml
	./cms/cms.rb view html local/content/cv.yaml

site: nav content
