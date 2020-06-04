// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class DescribeVodDomainConfigsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("DomainConfigs")]
        [Validation(Required=true)]
        public DescribeVodDomainConfigsResponseDomainConfigs DomainConfigs { get; set; }
        public class DescribeVodDomainConfigsResponseDomainConfigs : TeaModel {
            [NameInMap("DomainConfig")]
            [Validation(Required=true)]
            public List<DescribeVodDomainConfigsResponseDomainConfigsDomainConfig> DomainConfig { get; set; }
            public class DescribeVodDomainConfigsResponseDomainConfigsDomainConfig : TeaModel {
                    public string FunctionName { get; set; }
                    public string ConfigId { get; set; }
                    public string Status { get; set; }
                    public DescribeVodDomainConfigsResponseDomainConfigsDomainConfigFunctionArgs FunctionArgs { get; set; }
                    public class DescribeVodDomainConfigsResponseDomainConfigsDomainConfigFunctionArgs : TeaModel {
                        [NameInMap("FunctionArg")]
                        [Validation(Required=true)]
                        public List<DescribeVodDomainConfigsResponseDomainConfigsDomainConfigFunctionArgsFunctionArg> FunctionArg { get; set; }
                        public class DescribeVodDomainConfigsResponseDomainConfigsDomainConfigFunctionArgsFunctionArg : TeaModel {
                            [NameInMap("ArgName")]
                            [Validation(Required=true)]
                            public string ArgName { get; set; }

                            [NameInMap("ArgValue")]
                            [Validation(Required=true)]
                            public string ArgValue { get; set; }

                        }

                    }
            }
        };

    }

}
