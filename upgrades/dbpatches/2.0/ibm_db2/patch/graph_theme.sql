ALTER TABLE graph_theme ALTER COLUMN graphthemeid SET WITH DEFAULT NULL
/
REORG TABLE graph_theme
/
ALTER TABLE graph_theme ALTER COLUMN noneworktimecolor SET DEFAULT 'CCCCCC'
/
REORG TABLE graph_theme
/
ALTER TABLE graph_theme RENAME COLUMN noneworktimecolor TO nonworktimecolor
/
REORG TABLE graph_theme
/
UPDATE graph_theme SET theme = 'darkblue' WHERE theme = 'css_bb.css'
/
UPDATE graph_theme SET theme = 'originalblue' WHERE theme = 'css_ob.css'
/
INSERT INTO graph_theme (description, theme, backgroundcolor, graphcolor, graphbordercolor, gridcolor, maingridcolor, gridbordercolor, textcolor, highlightcolor, leftpercentilecolor, rightpercentilecolor, nonworktimecolor, gridview, legendview)
VALUES ('Dark orange', 'darkorange', '333333', '0A0A0A', '888888', '222222', '4F4F4F', 'EFEFEF', 'DFDFDF', 'FF5500', 'FF5500', 'FF1111', '1F1F1F', 1, 1);
/