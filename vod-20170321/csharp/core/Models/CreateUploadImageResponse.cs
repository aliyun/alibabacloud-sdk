// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class CreateUploadImageResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("ImageId")]
        [Validation(Required=true)]
        public string ImageId { get; set; }

        [NameInMap("ImageURL")]
        [Validation(Required=true)]
        public string ImageURL { get; set; }

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
