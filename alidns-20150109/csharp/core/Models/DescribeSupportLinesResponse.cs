// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Alidns20150109.Models
{
    public class DescribeSupportLinesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("RecordLines")]
        [Validation(Required=true)]
        public DescribeSupportLinesResponseRecordLines RecordLines { get; set; }
        public class DescribeSupportLinesResponseRecordLines : TeaModel {
            [NameInMap("RecordLine")]
            [Validation(Required=true)]
            public List<DescribeSupportLinesResponseRecordLinesRecordLine> RecordLine { get; set; }
            public class DescribeSupportLinesResponseRecordLinesRecordLine : TeaModel {
                    public string LineCode { get; set; }
                    public string FatherCode { get; set; }
                    public string LineName { get; set; }
                    public string LineDisplayName { get; set; }
            }
        };

    }

}
