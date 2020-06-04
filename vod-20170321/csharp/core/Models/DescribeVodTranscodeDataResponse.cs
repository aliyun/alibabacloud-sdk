// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class DescribeVodTranscodeDataResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("DataInterval")]
        [Validation(Required=true)]
        public string DataInterval { get; set; }

        [NameInMap("TranscodeData")]
        [Validation(Required=true)]
        public DescribeVodTranscodeDataResponseTranscodeData TranscodeData { get; set; }
        public class DescribeVodTranscodeDataResponseTranscodeData : TeaModel {
            [NameInMap("TranscodeDataItem")]
            [Validation(Required=true)]
            public List<DescribeVodTranscodeDataResponseTranscodeDataTranscodeDataItem> TranscodeDataItem { get; set; }
            public class DescribeVodTranscodeDataResponseTranscodeDataTranscodeDataItem : TeaModel {
                    public string TimeStamp { get; set; }
                    public DescribeVodTranscodeDataResponseTranscodeDataTranscodeDataItemData Data { get; set; }
                    public class DescribeVodTranscodeDataResponseTranscodeDataTranscodeDataItemData : TeaModel {
                        [NameInMap("DataItem")]
                        [Validation(Required=true)]
                        public List<DescribeVodTranscodeDataResponseTranscodeDataTranscodeDataItemDataDataItem> DataItem { get; set; }
                        public class DescribeVodTranscodeDataResponseTranscodeDataTranscodeDataItemDataDataItem : TeaModel {
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
