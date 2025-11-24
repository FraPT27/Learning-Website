<?php

require_once 'auth-check.php';
require_once 'navbar.php';

// Define a pool of 100 macroeconomy questions.
$allQuestions = [
    [
        'question' => 'What does GDP stand for?',
        'choices' => [
            'Gross Domestic Product',
            'Gross Domestic Profit',
            'General Domestic Production',
            'Gross Daily Production'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is inflation?',
        'choices' => [
            'A sustained increase in the general price level',
            'A temporary rise in prices',
            'A fall in the general price level',
            'A decrease in production'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What does CPI measure?',
        'choices' => [
            'Consumer Price Index',
            'Cost Price Indicator',
            'Consumer Performance Index',
            'Central Price Indicator'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is deflation?',
        'choices' => [
            'A decrease in the general price level',
            'An increase in the general price level',
            'Price stabilization',
            'A surge in production'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What does the unemployment rate measure?',
        'choices' => [
            'The percentage of the labor force that is jobless',
            'The total number of unemployed people',
            'The number of people not in the labor force',
            'The rate of retirement'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is fiscal policy?',
        'choices' => [
            'Government spending and taxation adjustments',
            'Central bank monetary operations',
            'Trade agreements between nations',
            'Regulation of international finance'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is monetary policy?',
        'choices' => [
            'Central bank actions to control the money supply and interest rates',
            'Government taxation strategies',
            'Trade policy measures',
            'Fiscal stimulus programs'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is hyperinflation?',
        'choices' => [
            'An extremely rapid and out-of-control inflation',
            'A moderate inflation rate',
            'A temporary price increase',
            'Stable prices over time'
        ],
        'answer' => 0
    ],
    [
        'question' => 'Which indicator is used to measure overall economic activity?',
        'choices' => [
            'GDP',
            'CPI',
            'Unemployment rate',
            'Interest rate'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is the primary function of a central bank?',
        'choices' => [
            'Managing the money supply and setting interest rates',
            'Regulating fiscal policy',
            'Setting tax rates',
            'Overseeing international trade'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is quantitative easing?',
        'choices' => [
            'A policy of purchasing government securities to increase the money supply',
            'A reduction in government spending',
            'An increase in taxation',
            'A method for reducing inflation by raising interest rates'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is a budget deficit?',
        'choices' => [
            'When government spending exceeds its revenues',
            'When government revenues exceed spending',
            'Balanced government finances',
            'A surplus in government revenue'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is a trade deficit?',
        'choices' => [
            'When a country imports more than it exports',
            'When exports exceed imports',
            'Balanced trade',
            'A trade surplus'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is the role of the International Monetary Fund (IMF)?',
        'choices' => [
            'To promote global monetary cooperation and provide financial assistance to countries',
            'To regulate international trade',
            'To set global tax policies',
            'To manage foreign investments'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is the primary purpose of the World Bank?',
        'choices' => [
            'To provide financial and technical assistance for development projects',
            'To regulate global trade',
            'To control international currency rates',
            'To set global interest rates'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What does economic growth refer to?',
        'choices' => [
            'An increase in the production of goods and services over time',
            'A decrease in overall production',
            'Stagnant economic output',
            'A reduction in consumer spending'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is the difference between nominal and real GDP?',
        'choices' => [
            'Real GDP is adjusted for inflation while nominal GDP is not',
            'Nominal GDP is adjusted for inflation while real GDP is not',
            'They are the same',
            'Real GDP only measures exports'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What does the Consumer Confidence Index measure?',
        'choices' => [
            'Consumers’ optimism about the economy',
            'The unemployment rate',
            'The inflation rate',
            'The government budget balance'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What generally happens when inflation rises?',
        'choices' => [
            'The purchasing power of money decreases',
            'The purchasing power of money increases',
            'Prices remain stable',
            'Production decreases significantly'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is stagflation?',
        'choices' => [
            'A combination of stagnant economic growth and high inflation',
            'Rapid economic growth with low inflation',
            'Falling prices with rapid growth',
            'A period of stable growth and low inflation'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is an interest rate?',
        'choices' => [
            'The cost of borrowing money expressed as a percentage',
            'The rate of inflation',
            'The profit margin of banks',
            'The speed of economic growth'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What does tight monetary policy mean?',
        'choices' => [
            'Measures to reduce the money supply and raise interest rates',
            'Increasing government spending to boost growth',
            'Reducing interest rates to stimulate borrowing',
            'Lowering taxes to increase consumer spending'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is the effect of low interest rates on borrowing?',
        'choices' => [
            'They make borrowing cheaper, stimulating spending',
            'They increase the cost of borrowing',
            'They have no effect on borrowing',
            'They reduce the money supply'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is a credit crunch?',
        'choices' => [
            'A shortage of available credit making it hard to obtain loans',
            'An increase in available credit',
            'A period of economic boom',
            'A fiscal policy tool'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is supply-side economics?',
        'choices' => [
            'Economic policies aimed at increasing production and efficiency',
            'Policies that boost consumer spending',
            'A method to control inflation by reducing government spending',
            'A strategy for increasing tax revenue'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is demand-side economics?',
        'choices' => [
            'Economic policies aimed at stimulating consumer demand',
            'Policies focused solely on production',
            'A method for reducing interest rates',
            'A theory to increase savings'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is the Laffer Curve?',
        'choices' => [
            'A theory showing the relationship between tax rates and tax revenue',
            'A graph of inflation trends',
            'A curve representing GDP growth',
            'A model of consumer spending'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What does stagflation combine?',
        'choices' => [
            'Stagnant growth and high inflation',
            'Rapid growth and deflation',
            'High growth and high employment',
            'Low inflation and low unemployment'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is the role of government spending in fiscal policy?',
        'choices' => [
            'To stimulate or slow down economic activity',
            'To control the money supply directly',
            'To set international trade policies',
            'To regulate interest rates'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What does "aggregate demand" refer to?',
        'choices' => [
            'The total demand for goods and services in an economy',
            'The demand for a specific product',
            'Government spending alone',
            'Exports only'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What does "aggregate supply" refer to?',
        'choices' => [
            'The total supply of goods and services in an economy',
            'The supply of a single product',
            'Only manufacturing output',
            'Total consumer spending'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is a recession?',
        'choices' => [
            'A significant decline in economic activity over a period of time',
            'A period of rapid economic growth',
            'Stable prices with high production',
            'A temporary spike in exports'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is a depression in economic terms?',
        'choices' => [
            'A prolonged and severe recession',
            'A short, mild recession',
            'An economic boom',
            'A period of deflation'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is an economic boom?',
        'choices' => [
            'A period of rapid economic expansion',
            'A period of stagnation',
            'A recession',
            'A phase of high unemployment'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What does the business cycle refer to?',
        'choices' => [
            'The fluctuations in economic activity over time',
            'A production cycle in a business',
            'A seasonal change in spending',
            'A fixed pattern in GDP growth'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is consumer spending?',
        'choices' => [
            'Expenditure by households on goods and services',
            'Government expenditure',
            'Business investment',
            'Exports'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is investment spending?',
        'choices' => [
            'Expenditure on capital goods for future production',
            'Household spending on consumables',
            'Government spending on infrastructure',
            'Export revenue'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is government spending?',
        'choices' => [
            'Expenditures by the government on public services and projects',
            'Private investment',
            'Household consumption',
            'Corporate profits'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What are net exports?',
        'choices' => [
            'Exports minus imports',
            'Total exports',
            'Total imports',
            'Domestic consumption'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is the multiplier effect?',
        'choices' => [
            'An initial change in spending leads to a larger change in national income',
            'The rate of inflation over time',
            'A measure of unemployment',
            'A method to calculate GDP'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is the difference between fiscal and monetary policy?',
        'choices' => [
            'Fiscal policy involves government spending and taxes, while monetary policy involves the money supply and interest rates',
            'They are the same',
            'Fiscal policy controls interest rates, and monetary policy sets taxes',
            'Monetary policy is only used during recessions'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is a sovereign debt crisis?',
        'choices' => [
            'A situation where a country cannot meet its debt obligations',
            'A corporate bankruptcy',
            'A stock market crash',
            'A period of high inflation'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is the balance of payments?',
        'choices' => [
            'A record of all economic transactions between a country and the rest of the world',
            'A government budget report',
            'The trade surplus',
            'Domestic production levels'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What does "exchange rate" refer to?',
        'choices' => [
            'The value of one currency in terms of another',
            'The inflation rate',
            'The interest rate',
            'The growth rate of GDP'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is currency devaluation?',
        'choices' => [
            'A decrease in the value of a country’s currency relative to others',
            'An increase in currency value',
            'Stable currency value',
            'A method to boost exports'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is currency appreciation?',
        'choices' => [
            'An increase in the value of a country’s currency relative to others',
            'A decrease in value',
            'No change in value',
            'A rapid decline in exports'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is an economic bubble?',
        'choices' => [
            'A market phenomenon with surging asset prices followed by a sudden collapse',
            'Stable market conditions',
            'A long-term growth trend',
            'A government spending strategy'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is a financial crisis?',
        'choices' => [
            'A situation where financial assets lose significant value rapidly',
            'A minor market correction',
            'A period of strong economic growth',
            'A balanced fiscal policy'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is disinflation?',
        'choices' => [
            'A decrease in the rate of inflation',
            'A period of deflation',
            'An increase in inflation',
            'Stable inflation'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is a price index?',
        'choices' => [
            'A measure of the weighted average of prices of a basket of goods and services',
            'A report of stock prices',
            'A measure of GDP',
            'An indicator of unemployment'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What does the Producer Price Index (PPI) measure?',
        'choices' => [
            'The average change in selling prices received by domestic producers',
            'Consumer price changes',
            'The total production output',
            'Government spending'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is the role of the Federal Reserve?',
        'choices' => [
            'To manage monetary policy and ensure financial stability in the US',
            'To set tax rates',
            'To control international trade',
            'To manage fiscal policy'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is the primary function of the European Central Bank (ECB)?',
        'choices' => [
            'To manage monetary policy for the Eurozone',
            'To manage fiscal policy',
            'To regulate trade policies',
            'To set global interest rates'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is a central bank?',
        'choices' => [
            'An institution responsible for managing a country\'s money supply and interest rates',
            'A commercial bank',
            'A retail bank',
            'A financial advisory firm'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is quantitative tightening?',
        'choices' => [
            'A policy to reduce the money supply by selling assets',
            'A policy to increase government spending',
            'A method to cut taxes',
            'A strategy to lower interest rates'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What describes long-term unemployment?',
        'choices' => [
            'Unemployment lasting for an extended period, typically over a year',
            'Temporary unemployment between jobs',
            'Seasonal unemployment',
            'Unemployment due to automation'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is structural unemployment?',
        'choices' => [
            'Unemployment caused by a mismatch between workers\' skills and job requirements',
            'Temporary unemployment due to job transitions',
            'Seasonal unemployment',
            'Unemployment due to economic cycles'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is cyclical unemployment?',
        'choices' => [
            'Unemployment related to the economic cycle',
            'Long-term unemployment',
            'Unemployment due to technological changes',
            'Unemployment during seasonal changes'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is frictional unemployment?',
        'choices' => [
            'Temporary unemployment as people transition between jobs',
            'Long-term unemployment',
            'Unemployment due to automation',
            'Unemployment during economic recessions'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is seasonal unemployment?',
        'choices' => [
            'Unemployment that occurs at certain times of the year',
            'Unemployment lasting for several years',
            'Unemployment due to technological innovation',
            'Unemployment during economic booms'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What does "balance sheet recession" refer to?',
        'choices' => [
            'A recession caused by widespread deleveraging and balance sheet adjustments',
            'A recession triggered by high inflation',
            'A short-term economic slowdown',
            'A period of deflation'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is a fiscal surplus?',
        'choices' => [
            'When government revenues exceed its spending',
            'When spending exceeds revenues',
            'Balanced government finances',
            'A minor budget overrun'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is expansionary fiscal policy?',
        'choices' => [
            'Increasing government spending or cutting taxes to stimulate the economy',
            'Raising taxes to reduce deficits',
            'Reducing government spending',
            'Increasing interest rates'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is contractionary fiscal policy?',
        'choices' => [
            'Reducing government spending or raising taxes to slow economic growth',
            'Increasing government spending',
            'Lowering taxes to stimulate growth',
            'Implementing quantitative easing'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What are automatic stabilizers?',
        'choices' => [
            'Economic policies (like unemployment benefits) that automatically adjust with the economy',
            'Manually implemented fiscal measures',
            'Central bank interest rate changes',
            'Fixed government budgets'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is the marginal propensity to consume (MPC)?',
        'choices' => [
            'The proportion of additional income that a consumer spends',
            'The total income of a household',
            'The rate of inflation',
            'The proportion of income saved'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is the marginal propensity to save (MPS)?',
        'choices' => [
            'The proportion of additional income that is saved',
            'The proportion of income spent',
            'The total savings of a household',
            'The unemployment rate'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is the Phillips Curve?',
        'choices' => [
            'A theory showing an inverse relationship between unemployment and inflation',
            'A graph of GDP growth over time',
            'A model of consumer behavior',
            'A measure of interest rates'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What does the Phillips Curve illustrate?',
        'choices' => [
            'The trade-off between unemployment and inflation',
            'The relationship between GDP and unemployment',
            'The link between fiscal policy and inflation',
            'The correlation between interest rates and savings'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is potential output?',
        'choices' => [
            'The level of output an economy can sustain at full employment',
            'The maximum output during an economic boom',
            'The current GDP',
            'The difference between exports and imports'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is the natural rate of unemployment?',
        'choices' => [
            'The rate of unemployment when the economy is at full capacity',
            'Zero unemployment',
            'A very high unemployment rate',
            'The rate during a recession'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is the output gap?',
        'choices' => [
            'The difference between actual and potential GDP',
            'The gap in consumer spending',
            'The difference between exports and imports',
            'The change in inflation rate'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is "crowding out" in fiscal policy?',
        'choices' => [
            'When increased government spending reduces private investment',
            'When private investment boosts government spending',
            'When taxes are too high',
            'When interest rates are too low'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What distinguishes short-run from long-run economic growth?',
        'choices' => [
            'Short-run growth is influenced by temporary factors, long-run growth is driven by productivity improvements',
            'They are identical',
            'Short-run growth is always higher',
            'Long-run growth ignores technological changes'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is a real interest rate?',
        'choices' => [
            'The nominal interest rate adjusted for inflation',
            'The nominal interest rate',
            'The rate of GDP growth',
            'The rate of consumer spending'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is a nominal interest rate?',
        'choices' => [
            'The stated interest rate without adjusting for inflation',
            'The inflation-adjusted rate',
            'The rate after taxes',
            'The rate of return on stocks'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is an inverted yield curve?',
        'choices' => [
            'A situation where short-term rates exceed long-term rates',
            'A normal yield curve',
            'A measure of inflation',
            'A fiscal policy tool'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What does an inverted yield curve typically signal?',
        'choices' => [
            'A potential recession',
            'Economic expansion',
            'Stable economic conditions',
            'High inflation with growth'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is monetary easing?',
        'choices' => [
            'A policy of lowering interest rates to stimulate the economy',
            'A policy of raising interest rates',
            'A fiscal policy measure',
            'A method of increasing taxes'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is the money multiplier?',
        'choices' => [
            'The ratio by which an initial deposit increases the total money supply',
            'The rate of inflation',
            'The GDP growth rate',
            'The percentage of income saved'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is the bank reserve requirement?',
        'choices' => [
            'The minimum fraction of deposits banks must hold in reserve',
            'The maximum loans a bank can issue',
            'The interest rate on savings accounts',
            'A measure of consumer spending'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is credit expansion?',
        'choices' => [
            'An increase in the availability of loans in the economy',
            'A reduction in credit supply',
            'A decrease in borrowing costs only',
            'A measure of fiscal surplus'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is consumer debt?',
        'choices' => [
            'Debt incurred by individuals for personal consumption',
            'Government debt',
            'Corporate debt',
            'International debt'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is public debt?',
        'choices' => [
            'Debt owed by a government',
            'Debt incurred by households',
            'Debt of private companies',
            'Foreign debt'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is private debt?',
        'choices' => [
            'Debt incurred by individuals and private firms',
            'Government debt',
            'International loans',
            'Public bonds'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is the impact of high debt levels on an economy?',
        'choices' => [
            'It can slow growth and cause financial instability',
            'It always boosts growth',
            'It increases consumer spending',
            'It reduces government deficits'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is the debt-to-GDP ratio?',
        'choices' => [
            'A measure comparing a country’s total debt to its GDP',
            'A measure of personal debt',
            'A measure of government revenue',
            'The difference between exports and imports'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What does a high debt-to-GDP ratio indicate?',
        'choices' => [
            'A risk of fiscal instability',
            'Strong economic growth',
            'Low unemployment',
            'High consumer confidence'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is fiscal sustainability?',
        'choices' => [
            'The ability of a government to maintain its current fiscal policies without risking solvency',
            'A short-term budget surplus',
            'Increasing tax rates indefinitely',
            'Rapid economic growth'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is economic convergence?',
        'choices' => [
            'The process by which poorer economies grow faster than richer ones, reducing disparities',
            'The widening gap between economies',
            'A stagnant economic environment',
            'A period of hyperinflation'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is economic divergence?',
        'choices' => [
            'The widening gap in income and productivity between economies',
            'The equalization of global incomes',
            'Stable economic growth worldwide',
            'An increase in international trade'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is purchasing power parity (PPP)?',
        'choices' => [
            'A theory that compares currencies through a basket of goods approach',
            'A measure of inflation',
            'A tax policy',
            'An investment strategy'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is the International Monetary Fund (IMF)?',
        'choices' => [
            'An organization that promotes global monetary cooperation and financial stability',
            'A trade organization',
            'A central bank',
            'A regional development bank'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is a currency crisis?',
        'choices' => [
            'A rapid devaluation of a country\'s currency',
            'Stable exchange rates',
            'An increase in GDP',
            'A period of low inflation'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is economic globalization?',
        'choices' => [
            'The increasing interdependence of world economies through trade and investment',
            'The isolation of national economies',
            'A decrease in international trade',
            'A method of increasing domestic production'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is protectionism?',
        'choices' => [
            'Economic policies aimed at protecting domestic industries from foreign competition',
            'Free trade policies',
            'An open market approach',
            'A fiscal stimulus measure'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is free trade?',
        'choices' => [
            'International trade with minimal tariffs and restrictions',
            'Trade controlled by the government',
            'A highly protected domestic market',
            'A method of raising tariffs'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is the World Trade Organization (WTO)?',
        'choices' => [
            'An international body that regulates global trade',
            'A financial institution',
            'A central bank',
            'A regional trade bloc'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is capital flight?',
        'choices' => [
            'The rapid outflow of financial assets from a country',
            'An increase in domestic investment',
            'A government spending program',
            'A method of increasing exports'
        ],
        'answer' => 0
    ],
    [
        'question' => 'What is economic policy uncertainty?',
        'choices' => [
            'The unpredictability in government policies affecting economic decisions',
            'Stable fiscal policies',
            'Predictable monetary measures',
            'A measure of consumer confidence'
        ],
        'answer' => 0
    ]
];

// Process form submission: verify answers.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $selectedQuestions = $_SESSION['selected_questions'] ?? [];
    $score = 0;
    $results = [];
    foreach ($selectedQuestions as $index => $question) {
        $userAnswer = isset($_POST["q$index"]) ? $_POST["q$index"] : -1;
        $correctAnswer = $question['answer'];
        if ($userAnswer == $correctAnswer) {
            $score++;
            $results[] = "<span class='text-green-600'>✅</span> Correct (Answer: " . htmlspecialchars($question['choices'][$correctAnswer]) . ")";
        } else {
            $results[] = "<span class='text-red-600'>❌</span> Incorrect (Correct answer: " . htmlspecialchars($question['choices'][$correctAnswer]) . ")";
        }
    }
    unset($_SESSION['selected_questions']);
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Quiz Results | Financial Pro</title>
      <script src="https://cdn.tailwindcss.com"></script>
      <style>
        .quiz-container {
          max-width: 800px;
          margin: 40px auto;
          padding: 20px;
          background-color: #ffffff;
          border-radius: 8px;
          box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .result {
          margin-bottom: 10px;
        }
        .refresh-btn {
          display: inline-block;
          background-color: #28a745;
          color: #ffffff;
          padding: 10px 20px;
          border-radius: 5px;
          text-decoration: none;
          transition: background-color 0.3s;
        }
        .refresh-btn:hover {
          background-color: #218838;
        }
      </style>
    </head>
    <body class="bg-gray-50">
      <div class="quiz-container">
        <h1 class="text-2xl font-bold mb-4">Your Score: <?php echo $score; ?> / <?php echo count($selectedQuestions); ?></h1>
        <ul class="list-disc pl-6 text-lg">
          <?php foreach ($results as $result) { echo '<li class="result">' . $result . '</li>'; } ?>
        </ul>
        <a href="quiz.php" class="refresh-btn mt-4 inline-block">Try Again</a>
      </div>
    </body>
    </html>
    <?php
    exit;
}

// If quiz is not submitted, randomly select 10 questions and shuffle choices.
if (!isset($_SESSION['selected_questions'])) {
    $selectedKeys = array_rand($allQuestions, 10);
    $selectedQuestions = [];
    if (!is_array($selectedKeys)) {
        $selectedKeys = [$selectedKeys];
    }
    foreach ($selectedKeys as $key) {
        $question = $allQuestions[$key];
        // Prepare an array to hold choices with their original indices.
        $temp = [];
        foreach ($question['choices'] as $i => $choice) {
            $temp[] = ['choice' => $choice, 'orig' => $i];
        }
        shuffle($temp);
        $shuffledChoices = [];
        $newAnswerIndex = 0;
        foreach ($temp as $i => $item) {
            $shuffledChoices[] = $item['choice'];
            if ($item['orig'] == $question['answer']) {
                $newAnswerIndex = $i;
            }
        }
        $question['choices'] = $shuffledChoices;
        $question['answer'] = $newAnswerIndex;
        $selectedQuestions[] = $question;
    }
    $_SESSION['selected_questions'] = $selectedQuestions;
} else {
    $selectedQuestions = $_SESSION['selected_questions'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Macroeconomy Quiz | Financial Pro</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .quiz-container {
      max-width: 800px;
      margin: 40px auto;
      padding: 20px;
      background-color: #ffffff;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .question-block {
      margin-bottom: 20px;
      padding: 10px;
      border-bottom: 1px solid #e2e8f0;
    }
    .submit-btn {
      display: inline-block;
      background-color: #28a745;
      color: #ffffff;
      padding: 10px 20px;
      border-radius: 5px;
      text-decoration: none;
      transition: background-color 0.3s;
      cursor: pointer;
    }
    .submit-btn:hover {
      background-color: #218838;
    }
  </style>
</head>
<body class="bg-gray-50">
  <div class="quiz-container">
    <h1 class="text-2xl font-bold mb-4">Macroeconomy Quiz</h1>
    <p class="mb-6">Answer the following 10 multiple choice questions:</p>
    <form action="quiz.php" method="POST">
      <?php
      foreach ($selectedQuestions as $index => $question) {
          echo '<div class="question-block">';
          echo '<p class="text-lg">' . htmlspecialchars($question['question']) . '</p>';
          foreach ($question['choices'] as $choiceIndex => $choice) {
              echo '<div class="mt-2">';
              echo '<input type="radio" id="q' . $index . 'c' . $choiceIndex . '" name="q' . $index . '" value="' . $choiceIndex . '"> ';
              echo '<label for="q' . $index . 'c' . $choiceIndex . '">' . htmlspecialchars($choice) . '</label>';
              echo '</div>';
          }
          echo '</div>';
      }
      ?>
      <button type="submit" class="submit-btn mt-4">Verify Answers</button>
    </form>
  </div>
</body>
</html>
