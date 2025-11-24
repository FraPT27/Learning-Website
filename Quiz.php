<?php
require_once 'auth-check.php';
require_once 'navbar.php';

// Define a pool of 100 questions about personal finance.
$allQuestions = [
    [
        'question' => "What is personal finance?",
        'choices' => [
            "The management of an individual’s or family's financial resources",
            "Corporate finance",
            "Public finance",
            "International finance"
        ],
        'answer' => 0
    ],
    [
        'question' => "What does budgeting help you achieve?",
        'choices' => [
            "Better control over expenses",
            "Increase in debt",
            "Unplanned spending",
            "Ignore spending habits"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is the 50-30-20 rule?",
        'choices' => [
            "A rule allocating 50% to necessities, 30% to wants, and 20% to savings",
            "A rule allocating 50% to savings, 30% to investments, 20% to spending",
            "A rule dividing income equally into three parts",
            "A rule for investment diversification"
        ],
        'answer' => 0
    ],
    [
        'question' => "Why is an emergency fund important?",
        'choices' => [
            "To cover unexpected expenses without incurring debt",
            "To invest in high-risk assets",
            "To buy luxury items",
            "To pay for regular expenses"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is cash flow?",
        'choices' => [
            "The movement of money in and out of your accounts",
            "A type of investment vehicle",
            "The amount of debt you owe",
            "A budgeting app"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is zero-based budgeting?",
        'choices' => [
            "A method where every dollar is allocated to a specific purpose",
            "A method that starts with zero savings",
            "A method that ignores expenses",
            "A method that calculates interest rates"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is the debt avalanche method?",
        'choices' => [
            "Paying off debts starting with the highest interest rate first",
            "Paying off the smallest debts first",
            "Ignoring high interest debts",
            "Consolidating all debts"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is diversification in investing?",
        'choices' => [
            "Spreading investments across various asset classes to reduce risk",
            "Investing only in one asset",
            "Buying more shares of the same stock",
            "Focusing solely on bonds"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is dollar-cost averaging?",
        'choices' => [
            "Investing a fixed amount at regular intervals regardless of market conditions",
            "Buying only when prices are low",
            "Investing only once",
            "Adjusting investments based on inflation"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is a target-date fund?",
        'choices' => [
            "A fund that adjusts its asset allocation based on a specific retirement date",
            "A fund that invests only in government bonds",
            "A fund that focuses on short-term gains",
            "A fund that only buys stocks"
        ],
        'answer' => 0
    ],
    [
        'question' => "What does 'credit score' measure?",
        'choices' => [
            "Your creditworthiness based on financial history",
            "Your income level",
            "The amount of savings you have",
            "The interest rate on your loans"
        ],
        'answer' => 0
    ],
    [
        'question' => "Why should you regularly review your credit report?",
        'choices' => [
            "To ensure accuracy and dispute errors",
            "To apply for new credit",
            "To increase your debt",
            "To calculate your net worth"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is compound interest?",
        'choices' => [
            "Interest calculated on both the principal and accumulated interest",
            "Interest calculated only on the principal",
            "Interest that is not reinvested",
            "Simple interest"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is the main benefit of a Roth IRA?",
        'choices' => [
            "Tax-free withdrawals in retirement",
            "Tax deductions on contributions",
            "Guaranteed returns",
            "Employer matching contributions"
        ],
        'answer' => 0
    ],
    [
        'question' => "What distinguishes an IRA from a 401(k)?",
        'choices' => [
            "IRAs are individual accounts, while 401(k)s are employer-sponsored",
            "IRAs offer employer matches",
            "401(k)s have no contribution limits",
            "401(k)s are taxable upon contribution"
        ],
        'answer' => 0
    ],
    [
        'question' => "What does 'asset allocation' mean?",
        'choices' => [
            "Distributing investments among different asset classes",
            "Investing only in stocks",
            "Focusing on high-risk assets",
            "Allocating all funds to bonds"
        ],
        'answer' => 0
    ],
    [
        'question' => "Why is tracking your expenses important?",
        'choices' => [
            "To identify spending habits and save money",
            "To increase your debt",
            "To avoid budgeting",
            "To invest in high-risk assets"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is a budget variance?",
        'choices' => [
            "The difference between planned and actual spending",
            "The total amount saved in a month",
            "The interest earned on savings",
            "A type of investment strategy"
        ],
        'answer' => 0
    ],
    [
        'question' => "How does inflation affect savings?",
        'choices' => [
            "It decreases the real value of money over time",
            "It increases the nominal value of savings",
            "It has no effect on cash",
            "It boosts investment returns automatically"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is the purpose of a savings rate?",
        'choices' => [
            "To measure the percentage of income saved",
            "To determine credit score",
            "To calculate debt",
            "To set interest rates"
        ],
        'answer' => 0
    ],
    [
        'question' => "What does 'living within your means' imply?",
        'choices' => [
            "Spending less than you earn",
            "Saving all your income",
            "Investing heavily in the stock market",
            "Borrowing money for luxuries"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is the role of a financial advisor?",
        'choices' => [
            "To provide personalized guidance on managing finances",
            "To guarantee investment returns",
            "To manage your daily expenses",
            "To audit your tax returns"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is an emergency fund?",
        'choices' => [
            "Savings reserved for unexpected expenses",
            "Money set aside for vacations",
            "Funds allocated for luxury purchases",
            "A type of investment account"
        ],
        'answer' => 0
    ],
    [
        'question' => "Why is diversification important in a portfolio?",
        'choices' => [
            "It reduces risk by spreading investments across various assets",
            "It guarantees higher returns",
            "It concentrates risk",
            "It eliminates market volatility"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is a mutual fund?",
        'choices' => [
            "A pool of money from many investors used to invest in a diversified portfolio",
            "An individual stock",
            "A type of bond",
            "A retirement account"
        ],
        'answer' => 0
    ],
    [
        'question' => "What does 'credit utilization ratio' indicate?",
        'choices' => [
            "The percentage of available credit that is currently being used",
            "The total amount of debt you have",
            "The number of credit cards you own",
            "The interest rate on your loans"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is a fixed expense?",
        'choices' => [
            "An expense that remains constant every month",
            "An unpredictable expense",
            "A variable cost",
            "An optional expense"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is a variable expense?",
        'choices' => [
            "An expense that can change from month to month",
            "A constant, fixed cost",
            "An expense that is tax-deductible",
            "An investment expense"
        ],
        'answer' => 0
    ],
    [
        'question' => "Why is it beneficial to automate savings?",
        'choices' => [
            "It helps consistently build a savings habit",
            "It increases spending",
            "It guarantees investment returns",
            "It eliminates the need for a budget"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is financial discipline?",
        'choices' => [
            "The practice of managing money responsibly and consistently",
            "The ability to spend freely",
            "Ignoring financial goals",
            "Relying on loans for expenses"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is an investment portfolio?",
        'choices' => [
            "A collection of investments held by an individual or institution",
            "A list of monthly expenses",
            "A savings account",
            "A type of credit score"
        ],
        'answer' => 0
    ],
    [
        'question' => "What does 'risk tolerance' refer to?",
        'choices' => [
            "The degree of variability in investment returns that an investor is willing to withstand",
            "The amount of debt you can accumulate",
            "The number of investment options available",
            "The interest rate on loans"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is the benefit of long-term investing?",
        'choices' => [
            "It allows you to take advantage of compound interest and market growth",
            "It guarantees immediate returns",
            "It avoids market fluctuations entirely",
            "It requires no risk management"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is a stock?",
        'choices' => [
            "A share of ownership in a company",
            "A type of bond",
            "A savings account",
            "A loan"
        ],
        'answer' => 0
    ],
    [
        'question' => "What does 'liquidity' refer to in finance?",
        'choices' => [
            "How quickly an asset can be converted into cash",
            "The rate of interest on a loan",
            "The amount of debt a company has",
            "A budgeting tool"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is an interest rate?",
        'choices' => [
            "The percentage charged on borrowed money",
            "The rate at which savings grow",
            "The amount of tax owed",
            "The number of credit cards you own"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is credit?",
        'choices' => [
            "The ability to borrow money based on your financial reputation",
            "A measure of your savings",
            "An investment strategy",
            "A type of expense"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is a credit card?",
        'choices' => [
            "A card that allows you to borrow money for purchases, with interest applied",
            "A debit card linked directly to your bank account",
            "An identification card",
            "A type of savings account"
        ],
        'answer' => 0
    ],
    [
        'question' => "What does it mean to refinance a loan?",
        'choices' => [
            "To replace an existing loan with a new one at a different interest rate",
            "To pay off a loan early",
            "To increase the interest rate on a loan",
            "To consolidate credit cards"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is a debt consolidation loan?",
        'choices' => [
            "A loan used to combine multiple debts into a single payment",
            "A loan for purchasing a house",
            "A credit card loan",
            "An emergency fund"
        ],
        'answer' => 0
    ],
    [
        'question' => "What does 'nominal value' mean?",
        'choices' => [
            "The face value of money without adjusting for inflation",
            "The real purchasing power of money",
            "The interest rate on savings",
            "The market value of an investment"
        ],
        'answer' => 0
    ],
    [
        'question' => "What does 'real value' mean in finance?",
        'choices' => [
            "The value of money adjusted for inflation",
            "The nominal value of money",
            "The total debt outstanding",
            "The percentage of savings earned"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is the primary purpose of budgeting?",
        'choices' => [
            "To plan and control your spending",
            "To increase your debt",
            "To invest in stocks",
            "To manage credit scores"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is a financial goal?",
        'choices' => [
            "A target amount you aim to save or invest by a certain time",
            "An unplanned expense",
            "A type of loan",
            "A budgeting tool"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is the benefit of using a budgeting app?",
        'choices' => [
            "It automates expense tracking and helps manage finances",
            "It guarantees investment returns",
            "It increases your spending",
            "It calculates your credit score"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is the importance of reviewing your expenses regularly?",
        'choices' => [
            "To identify unnecessary spending and adjust your budget",
            "To increase your debt",
            "To invest in risky assets",
            "To calculate your net worth"
        ],
        'answer' => 0
    ],
    [
        'question' => "What does 'financial literacy' refer to?",
        'choices' => [
            "The knowledge and understanding of financial principles",
            "The ability to earn a high income",
            "The skill of investing in the stock market",
            "The management of corporate funds"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is a bond?",
        'choices' => [
            "A debt security that pays regular interest",
            "An ownership share in a company",
            "A type of savings account",
            "A credit card"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is an ETF?",
        'choices' => [
            "An exchange-traded fund that tracks a particular index",
            "A type of bond",
            "A savings instrument",
            "A retirement account"
        ],
        'answer' => 0
    ],
    [
        'question' => "What does 'return on investment' (ROI) measure?",
        'choices' => [
            "The profitability of an investment",
            "The total amount of money saved",
            "The interest rate on a loan",
            "The risk level of an investment"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is a dividend?",
        'choices' => [
            "A portion of a company's earnings distributed to shareholders",
            "A type of interest rate",
            "A fee paid on a loan",
            "A tax on investments"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is portfolio rebalancing?",
        'choices' => [
            "Adjusting the weights of assets in a portfolio to maintain desired allocation",
            "Selling all investments and starting over",
            "Ignoring market fluctuations",
            "Investing only in bonds"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is a savings account?",
        'choices' => [
            "A bank account that earns interest on your deposits",
            "An investment in stocks",
            "A type of loan",
            "A credit instrument"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is the main goal of debt management?",
        'choices' => [
            "To reduce interest costs and improve financial stability",
            "To increase borrowing",
            "To avoid saving money",
            "To invest in high-risk assets"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is the role of a credit report?",
        'choices' => [
            "To provide a detailed history of your credit behavior",
            "To track your expenses",
            "To determine your savings rate",
            "To calculate your net worth"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is a fixed interest rate?",
        'choices' => [
            "An interest rate that remains constant over the life of a loan",
            "An interest rate that fluctuates with the market",
            "An interest rate that applies only to credit cards",
            "An interest rate that is always low"
        ],
        'answer' => 0
    ],
    [
        'question' => "What does 'net worth' mean?",
        'choices' => [
            "The difference between your assets and liabilities",
            "Your total income",
            "The sum of your debts",
            "The amount in your savings account"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is an expense tracker?",
        'choices' => [
            "A tool that records and categorizes your spending",
            "A type of investment strategy",
            "A financial advisor",
            "A credit scoring system"
        ],
        'answer' => 0
    ],
    [
        'question' => "What does 'savings rate' indicate?",
        'choices' => [
            "The percentage of your income that you save",
            "The interest rate on your savings account",
            "The rate of return on investments",
            "The amount of debt you have"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is financial planning?",
        'choices' => [
            "The process of setting goals, budgeting, and investing to secure your future",
            "A short-term spending strategy",
            "An automatic savings plan",
            "A method of borrowing money"
        ],
        'answer' => 0
    ],
    [
        'question' => "Why is diversification a key principle in investing?",
        'choices' => [
            "It reduces risk by not putting all your eggs in one basket",
            "It increases potential returns without risk",
            "It focuses on a single asset class",
            "It eliminates the need for rebalancing"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is asset appreciation?",
        'choices' => [
            "An increase in the market value of an asset over time",
            "A decrease in asset value",
            "The interest earned on an asset",
            "A measure of asset liquidity"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is a recession?",
        'choices' => [
            "A significant decline in economic activity across the economy",
            "A period of economic growth",
            "An increase in personal savings",
            "A strategy for debt management"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is the primary purpose of a retirement account?",
        'choices' => [
            "To save and invest money for retirement",
            "To manage day-to-day expenses",
            "To finance a home purchase",
            "To pay off debt"
        ],
        'answer' => 0
    ],
    [
        'question' => "What does 'tax-deferred' mean?",
        'choices' => [
            "Taxes on investment earnings are postponed until withdrawal",
            "Taxes are waived entirely",
            "Taxes are paid monthly",
            "There are no taxes on these earnings"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is a pension?",
        'choices' => [
            "A retirement plan that provides a fixed income after retirement",
            "A type of savings account",
            "An investment in stocks",
            "A loan for retirees"
        ],
        'answer' => 0
    ],
    [
        'question' => "What does 'inflation' refer to?",
        'choices' => [
            "The rate at which the general level of prices for goods and services rises",
            "A decrease in the purchasing power of money",
            "A type of investment return",
            "A measure of debt"
        ],
        'answer' => 0
    ],
    [
        'question' => "Why is starting to save early important for retirement?",
        'choices' => [
            "It allows more time for compound interest to grow your savings",
            "It guarantees immediate wealth",
            "It avoids the need for investing",
            "It prevents debt accumulation"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is a target-date fund designed to do?",
        'choices' => [
            "Automatically adjust asset allocation as you approach retirement",
            "Invest only in stocks",
            "Provide fixed returns regardless of market conditions",
            "Eliminate the need for rebalancing"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is liquidity risk?",
        'choices' => [
            "The risk that an asset cannot be sold quickly without affecting its price",
            "The risk of losing money on investments",
            "The risk associated with high inflation",
            "The risk of a high credit score"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is a savings goal?",
        'choices' => [
            "A specific target amount of money you aim to save",
            "An undefined idea of saving",
            "A debt reduction strategy",
            "A budgeting method"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is the benefit of having multiple sources of income?",
        'choices' => [
            "It provides financial stability and reduces reliance on a single income stream",
            "It complicates budgeting",
            "It increases debt",
            "It decreases savings potential"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is the purpose of setting financial priorities?",
        'choices' => [
            "To focus your resources on the most important goals",
            "To spend more money on luxury items",
            "To ignore debt management",
            "To invest in risky assets"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is a discretionary expense?",
        'choices' => [
            "An expense that is not essential and can be reduced or eliminated",
            "An expense that is fixed every month",
            "A mandatory bill",
            "An investment expense"
        ],
        'answer' => 0
    ],
    [
        'question' => "What does 'sustainable spending' mean?",
        'choices' => [
            "Spending within the limits of your income to avoid debt",
            "Spending all your money as soon as possible",
            "Borrowing money to spend",
            "Investing in high-risk assets"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is a financial emergency?",
        'choices' => [
            "An unexpected situation that requires immediate funds",
            "A planned expense",
            "A type of investment",
            "A normal monthly bill"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is the purpose of a financial plan?",
        'choices' => [
            "To outline your financial goals and the strategies to achieve them",
            "To track daily spending only",
            "To avoid saving money",
            "To increase debt"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is a credit limit?",
        'choices' => [
            "The maximum amount you can borrow on a credit card",
            "The amount of money you have in your bank account",
            "The interest rate on your credit card",
            "A type of expense"
        ],
        'answer' => 0
    ],
    [
        'question' => "What does 'financial independence' mean?",
        'choices' => [
            "Having enough income from investments and savings to cover your living expenses",
            "Relying on loans for expenses",
            "Spending without budgeting",
            "Earning a high salary"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is passive income?",
        'choices' => [
            "Income earned with minimal effort, such as from dividends or rental properties",
            "Income from a full-time job",
            "Income that requires constant work",
            "A type of loan repayment"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is the purpose of a diversified portfolio?",
        'choices' => [
            "To reduce risk by spreading investments across different asset classes",
            "To focus all investments in one sector",
            "To increase market volatility",
            "To minimize returns"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is an interest-bearing account?",
        'choices' => [
            "A bank account that pays interest on deposits",
            "A credit card account",
            "A non-interest savings account",
            "A type of investment fund"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is the significance of regular financial reviews?",
        'choices' => [
            "They help you adjust your budget and investment strategies as needed",
            "They increase your expenses",
            "They are unnecessary once your budget is set",
            "They only matter in retirement planning"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is a financial milestone?",
        'choices' => [
            "A significant achievement or goal in your financial journey",
            "An unexpected expense",
            "A minor savings amount",
            "A credit score improvement"
        ],
        'answer' => 0
    ],
    [
        'question' => "What does it mean to live paycheck to paycheck?",
        'choices' => [
            "Spending nearly all of your income with little left for savings",
            "Saving a large portion of your income",
            "Investing heavily in stocks",
            "Avoiding any debt"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is the purpose of setting a budget limit?",
        'choices' => [
            "To ensure you do not overspend and to encourage savings",
            "To force you to invest in high-risk assets",
            "To increase your debt",
            "To track only fixed expenses"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is financial resilience?",
        'choices' => [
            "The ability to recover from financial setbacks",
            "The capacity to earn a high income",
            "A measure of total savings",
            "The speed at which you can spend money"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is the benefit of automated bill payments?",
        'choices' => [
            "They help avoid late fees and maintain a good credit score",
            "They increase monthly expenses",
            "They require manual tracking",
            "They reduce your income"
        ],
        'answer' => 0
    ],
    [
        'question' => "What does 'net income' mean?",
        'choices' => [
            "Income after all deductions, including taxes, have been subtracted",
            "Total gross income",
            "The amount saved from your salary",
            "A type of investment"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is a discretionary budget?",
        'choices' => [
            "A budget that focuses on non-essential spending",
            "A budget that includes all fixed expenses",
            "A mandatory savings plan",
            "An investment plan"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is the purpose of financial goal-setting?",
        'choices' => [
            "To provide direction and motivation for saving and investing",
            "To track daily expenses",
            "To avoid budgeting altogether",
            "To increase debt"
        ],
        'answer' => 0
    ],
    [
        'question' => "What does 'opportunity cost' refer to?",
        'choices' => [
            "The cost of forgoing the next best alternative when making a decision",
            "The fee charged on investments",
            "The interest rate on loans",
            "The amount of money saved"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is a stock market index?",
        'choices' => [
            "A measurement of the performance of a group of stocks",
            "A list of all stocks in a country",
            "A tool for calculating individual stock prices",
            "A type of bond index"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is liquidity?",
        'choices' => [
            "The ease with which an asset can be converted into cash",
            "The total amount of money in your savings account",
            "The interest earned on an investment",
            "A measure of financial discipline"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is an annuity?",
        'choices' => [
            "A financial product that provides a series of payments at regular intervals",
            "A type of savings account",
            "A short-term investment",
            "A credit instrument"
        ],
        'answer' => 0
    ],
    [
        'question' => "What does 'financial planning' involve?",
        'choices' => [
            "Setting goals, budgeting, investing, and planning for future needs",
            "Only saving money",
            "Investing without a plan",
            "Avoiding debt management"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is a good credit score generally considered to be in the US?",
        'choices' => [
            "Above 700",
            "Below 600",
            "Between 600 and 650",
            "Exactly 750"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is a credit utilization rate?",
        'choices' => [
            "The ratio of your current credit card balances to your credit limits",
            "The total amount of credit available",
            "The interest rate on your credit cards",
            "The number of credit cards you own"
        ],
        'answer' => 0
    ],
    [
        'question' => "What does 'asset appreciation' mean?",
        'choices' => [
            "An increase in the value of an asset over time",
            "A decrease in asset value",
            "The interest earned on an asset",
            "A measure of asset liquidity"
        ],
        'answer' => 0
    ],
    [
        'question' => "What is the digital age's impact on personal finance?",
        'choices' => [
            "Increased access to financial tools and real-time information",
            "Reduced financial literacy",
            "Elimination of traditional banks",
            "Increased financial uncertainty"
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
          <?php
          foreach ($results as $result) {
              echo '<li class="result">' . $result . '</li>';
          }
          ?>
        </ul>
        <a href="quiz.php" class="refresh-btn mt-4 inline-block">Try Again</a>
        <a href="dashboard.php" class="refresh-btn mt-4 inline-block">Home</a>
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
  <title>Personal Finance Quiz | Financial Pro</title>
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
    <h1 class="text-2xl font-bold mb-4">Personal Finance Quiz</h1>
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
