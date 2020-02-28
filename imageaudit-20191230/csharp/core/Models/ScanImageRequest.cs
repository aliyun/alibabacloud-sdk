// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Imageaudit.Models
{
    public class ScanImageRequest : TeaModel {
        [NameInMap("Task")]
        [Validation(Required=true)]
        public List<ScanImageRequestTask> Task { get; set; }
        public class ScanImageRequestTask : TeaModel {
            [NameInMap("DataId")]
            [Validation(Required=false)]
            public string DataId { get; set; }

            [NameInMap("ImageURL")]
            [Validation(Required=true)]
            public string ImageURL { get; set; }

            [NameInMap("ImageTimeMillisecond")]
            [Validation(Required=false)]
            public long ImageTimeMillisecond { get; set; }

            [NameInMap("Interval")]
            [Validation(Required=false)]
            public int? Interval { get; set; }

            [NameInMap("MaxFrames")]
            [Validation(Required=false)]
            public int? MaxFrames { get; set; }

        }

        [NameInMap("Scene")]
        [Validation(Required=true)]
        public List<string> Scene { get; set; }

    }

}
