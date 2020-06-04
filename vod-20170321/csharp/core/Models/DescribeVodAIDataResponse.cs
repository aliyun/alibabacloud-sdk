// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class DescribeVodAIDataResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("DataInterval")]
        [Validation(Required=true)]
        public string DataInterval { get; set; }

        [NameInMap("AIData")]
        [Validation(Required=true)]
        public DescribeVodAIDataResponseAIData AIData { get; set; }
        public class DescribeVodAIDataResponseAIData : TeaModel {
            [NameInMap("AIDataItem")]
            [Validation(Required=true)]
            public List<DescribeVodAIDataResponseAIDataAIDataItem> AIDataItem { get; set; }
            public class DescribeVodAIDataResponseAIDataAIDataItem : TeaModel {
                    public string TimeStamp { get; set; }
                    public DescribeVodAIDataResponseAIDataAIDataItemData Data { get; set; }
                    public class DescribeVodAIDataResponseAIDataAIDataItemData : TeaModel {
                        [NameInMap("DataItem")]
                        [Validation(Required=true)]
                        public List<DescribeVodAIDataResponseAIDataAIDataItemDataDataItem> DataItem { get; set; }
                        public class DescribeVodAIDataResponseAIDataAIDataItemDataDataItem : TeaModel {
                            [NameInMap("Name")]
                            [Validation(Required=true)]
                            public string Name { get; set; }

                            [NameInMap("Value")]
                            [Validation(Required=true)]
                            public string Value { get; set; }

                        }

                    }
            }
        };

    }

}
