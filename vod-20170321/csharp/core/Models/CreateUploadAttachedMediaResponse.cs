// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class CreateUploadAttachedMediaResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("MediaId")]
        [Validation(Required=true)]
        public string MediaId { get; set; }

        [NameInMap("MediaURL")]
        [Validation(Required=true)]
        public string MediaURL { get; set; }

        [NameInMap("UploadAddress")]
        [Validation(Required=true)]
        public string UploadAddress { get; set; }

        [NameInMap("UploadAuth")]
        [Validation(Required=true)]
        public string UploadAuth { get; set; }

        [NameInMap("FileURL")]
        [Validation(Required=true)]
        public string FileURL { get; set; }

    }

}
