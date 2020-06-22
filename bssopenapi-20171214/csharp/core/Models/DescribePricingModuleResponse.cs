// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class DescribePricingModuleResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("Code")]
        [Validation(Required=true)]
        public string Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public DescribePricingModuleResponseData Data { get; set; }
        public class DescribePricingModuleResponseData : TeaModel {
            [NameInMap("ModuleList")]
            [Validation(Required=true)]
            public DescribePricingModuleResponseDataModuleList ModuleList { get; set; }
            public class DescribePricingModuleResponseDataModuleList : TeaModel {
                [NameInMap("Module")]
                [Validation(Required=true)]
                public List<DescribePricingModuleResponseDataModuleListModule> Module { get; set; }
                public class DescribePricingModuleResponseDataModuleListModule : TeaModel {
                    [NameInMap("ModuleCode")]
                    [Validation(Required=true)]
                    public string ModuleCode { get; set; }

                    [NameInMap("ModuleName")]
                    [Validation(Required=true)]
                    public string ModuleName { get; set; }

                    [NameInMap("PriceType")]
                    [Validation(Required=true)]
                    public string PriceType { get; set; }

                    [NameInMap("Currency")]
                    [Validation(Required=true)]
                    public string Currency { get; set; }

                    [NameInMap("ConfigList")]
                    [Validation(Required=true)]
                    public DescribePricingModuleResponseDataModuleListModuleConfigList ConfigList { get; set; }
                    public class DescribePricingModuleResponseDataModuleListModuleConfigList : TeaModel {
                        [NameInMap("ConfigList")]
                        [Validation(Required=true)]
                        public List<string> ConfigList { get; set; }
                    };

                }

            }
            [NameInMap("AttributeList")]
            [Validation(Required=true)]
            public DescribePricingModuleResponseDataAttributeList AttributeList { get; set; }
            public class DescribePricingModuleResponseDataAttributeList : TeaModel {
                [NameInMap("Attribute")]
                [Validation(Required=true)]
                public List<DescribePricingModuleResponseDataAttributeListAttribute> Attribute { get; set; }
                public class DescribePricingModuleResponseDataAttributeListAttribute : TeaModel {
                    [NameInMap("Code")]
                    [Validation(Required=true)]
                    public string Code { get; set; }

                    [NameInMap("Name")]
                    [Validation(Required=true)]
                    public string Name { get; set; }

                    [NameInMap("Unit")]
                    [Validation(Required=true)]
                    public string Unit { get; set; }

                }

            }
        };

    }

}
