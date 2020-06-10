// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DescribeProductsOfActiveMetricRuleResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("Code")]
        [Validation(Required=true)]
        public int? Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("Datapoints")]
        [Validation(Required=true)]
        public string Datapoints { get; set; }

        [NameInMap("AllProductInitMetricRuleList")]
        [Validation(Required=true)]
        public DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleList AllProductInitMetricRuleList { get; set; }
        public class DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleList : TeaModel {
            [NameInMap("AllProductInitMetricRule")]
            [Validation(Required=true)]
            public List<DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleListAllProductInitMetricRule> AllProductInitMetricRule { get; set; }
            public class DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleListAllProductInitMetricRule : TeaModel {
                    public string Product { get; set; }
                    public DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleListAllProductInitMetricRuleAlertInitConfigList AlertInitConfigList { get; set; }
                    public class DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleListAllProductInitMetricRuleAlertInitConfigList : TeaModel {
                        [NameInMap("AlertInitConfig")]
                        [Validation(Required=true)]
                        public List<DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleListAllProductInitMetricRuleAlertInitConfigListAlertInitConfig> AlertInitConfig { get; set; }
                        public class DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleListAllProductInitMetricRuleAlertInitConfigListAlertInitConfig : TeaModel {
                            [NameInMap("Namespace")]
                            [Validation(Required=true)]
                            public string Namespace { get; set; }

                            [NameInMap("MetricName")]
                            [Validation(Required=true)]
                            public string MetricName { get; set; }

                            [NameInMap("Statistics")]
                            [Validation(Required=true)]
                            public string Statistics { get; set; }

                            [NameInMap("EvaluationCount")]
                            [Validation(Required=true)]
                            public string EvaluationCount { get; set; }

                            [NameInMap("Threshold")]
                            [Validation(Required=true)]
                            public string Threshold { get; set; }

                            [NameInMap("Period")]
                            [Validation(Required=true)]
                            public string Period { get; set; }

                        }

                    }
            }
        };

    }

}
