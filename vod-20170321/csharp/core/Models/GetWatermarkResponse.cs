// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class GetWatermarkResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("WatermarkInfo")]
        [Validation(Required=true)]
        public GetWatermarkResponseWatermarkInfo WatermarkInfo { get; set; }
        public class GetWatermarkResponseWatermarkInfo : TeaModel {
            [NameInMap("CreationTime")]
            [Validation(Required=true)]
            public string CreationTime { get; set; }
            [NameInMap("Type")]
            [Validation(Required=true)]
            public string Type { get; set; }
            [NameInMap("IsDefault")]
            [Validation(Required=true)]
            public string IsDefault { get; set; }
            [NameInMap("WatermarkId")]
            [Validation(Required=true)]
            public string WatermarkId { get; set; }
            [NameInMap("Name")]
            [Validation(Required=true)]
            public string Name { get; set; }
            [NameInMap("FileUrl")]
            [Validation(Required=true)]
            public string FileUrl { get; set; }
            [NameInMap("WatermarkConfig")]
            [Validation(Required=true)]
            public string WatermarkConfig { get; set; }
            [NameInMap("AppId")]
            [Validation(Required=true)]
            public string AppId { get; set; }
        };

    }

}
